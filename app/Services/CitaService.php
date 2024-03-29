<?php

namespace App\Services;

use App\Models\Cita;
use App\Models\Horarios;
use Carbon\Carbon;

class CitaService
{
    public function generateTimeData(Carbon $date, $serviceId)
    {
        $dayName = $date->isoFormat('dddd');
        $horario = Horarios::where('day', $dayName)
            ->where('servicio_id', $serviceId)
            ->first();
        $horas = array_filter($horario->TimesPeriod);
        $currentCita = Cita::where('servicio_id', $serviceId)
            ->where('date', $date->toDateString())->pluck('time')->map(function ($time) {
                return Carbon::parse($time)->format('H:i');
            })->toArray();
        $horasDisponibles = array_diff($horas, $currentCita);
        if ($horasDisponibles != null) {
            return [
                'day_name' => $dayName,
                'date' => $date->isoFormat('LL'),
                'date_format' => $date->format('Y-m-d'),
                'step' => $horario->step,
                'business_hours' => $horas,
                'reserved_hours' => $currentCita,
                'available_hours' => $horasDisponibles,
                'servicio_id' => $serviceId,
                'off' => $horario->status
            ];
        }
    }
}
