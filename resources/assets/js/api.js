
$('select[name="servicio_id"]').on('select2:opening', function (e) {
// clear data value select2
    $(this).val(null).trigger('change');
});

$('select[name="servicio_id"]').on('select2:select', async function (e) {
    const servicioId = $(this).val();
    await obtenerHorarios(servicioId);
});
async function obtenerHorarios(servicioId) {
    const response = await $.get({
        url: "https://sisaf.test/api/horarios/" + servicioId,
        cache: "true",
        success: function (response) {
            console.log(response);
            $('#horarios').empty();
            $('#time_recovered').remove();
            const horariosContainer = $('#horarios'); // Obtener el contenedor de los horarios
            response.forEach(dia => {
                if (dia.off) {
                    const fieldset = $(
                        '<fieldset class="flex flex-wrap gap-3 w-full"></fieldset>');
                    const alert = $('<div class="alert alert-info w-full"></div>');
                    const diaNombre = $('<h3>').text(dia.day_name)
                    const diaCompleto = $('<h3>').text(dia.date);
                    const diaStep = $('<h3>').text("Tiempo de consulta : " + dia.step);
                    alert.append([diaNombre, diaCompleto, diaStep]);
                    fieldset.append(alert);
                    console.log(Object.values(dia.business_hours));
                    Object.values(dia.business_hours).forEach(hora => {
                        if (!dia.reserved_hours.includes(hora)) {
                            const horaContainer = $('<div>');
                            const label = $('<label>')
                                .attr('for',
                                    `hora_${dia.day_name}_${hora.replace(':', '')}`)
                                .addClass(
                                    'cursor-pointer border border-gray-400 p-2 hover:scale-105 has-[:checked]:bg-blue-400 has-[:checked]:text-white'
                                );
                            const input = $('<input type="radio" name="time" />')
                                .val(hora)
                                .addClass(
                                    'sr-only'
                                )
                                .attr({
                                    'data-date': dia.date_format,
                                    'data-step': dia.step,
                                    'id': `hora_${dia.day_name}_${hora.replace(':', '')}`
                                });

                            const paragraph = $('<p>').text(hora)

                            label.append([input, paragraph]);
                            horaContainer.append(label);
                            fieldset.append(horaContainer);
                            horariosContainer.append(fieldset);
                        } else {
                            const label = $('<label>')
                                .addClass(
                                    'border bg-gray-800 p-2  text-white'
                                );
                            label.tooltip({
                                placement: 'top',
                                trigger: 'hover',
                                title: 'Este día está reservado',
                                delay: { "hide": 300 },
                            });

                            const paragraph = $('<p>').text(hora)
                            label.append(paragraph);
                            fieldset.append(label);
                            horariosContainer.append(fieldset);
                        }
                    });
                } else {
                    const fieldset = $(
                        '<fieldset class="flex flex-wrap gap-3"></fieldset>');
                    const alert = $('<div class="alert alert-warning w-full"></div>');
                    const diaNombre = $('<h3>').text(dia.day_name)
                    const diaCompleto = $('<h3>').text('Este día se estableció sin atención');
                    alert.append([diaNombre, diaCompleto]);
                    fieldset.append(alert);
                    horariosContainer.append(fieldset);
                }
            });
            $('#horarios').ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        }
    });
}
$('#horarios').on('change', 'input[type="radio"]', function () {
    const selectedDate = $(this).data('date');
    const selectedStep = $(this).data('step');
    const $label = $('#date');
    $label.text('Dia seleccionado : ' + selectedDate)
        .removeClass('label-warning')
        .addClass('label-success');
    $('#date_format').val(selectedDate);
    $('#date_step').val(selectedStep);
});
