@component('mail::message')

@component('mail::panel')
# Cita Reservada
@endcomponent

## Detalles:

@component('mail::table')
| **Motivo**       | {{$motivo}}      |
|:------------- | -------------:|
| **Día**      | {{ date_format($starTime, 'j M Y') }}  |
| **Desde**     | {{ date_format($starTime, 'H:i A') }} |
| **Hasta**     | {{ date_format($endTime, 'H:i A') }}  |
| **Tiempo de Consulta**     | {{$value}}              |
@endcomponent


@component('mail::subcopy')
    Su cita ha sido reservada, le esperamos en Calle
@endcomponent


De {{ config('app.name') }}
@endcomponent

