<?php

namespace App\Observers;

use App\Models\Servicios;
use App\Models\Horarios;

class ScheduleServicesObserver
{
    /**
     * Handle the Servicios "created" event.
     */

    public function created(Servicios $servicios): void
    {
    $days = config('appointments.days');
        foreach ($days as $day){
            $horarios = Horarios::create([
                'day' => $day,
                'from' => '09:00',
                'to' => '17:00',
                'step'=> 30,
                'off' => 0,
                'servicio_id' => $servicios->id,
            ]
            );
            $horarios->save();
        }
    }

    /**
     * Handle the Servicios "updated" event.
     */
    public function updated(Servicios $servicios): void
    {
        //
    }

    /**
     * Handle the Servicios "deleted" event.
     */
    public function deleted(Servicios $servicios): void
    {
        //
    }

    /**
     * Handle the Servicios "restored" event.
     */
    public function restored(Servicios $servicios): void
    {
        //
    }

    /**
     * Handle the Servicios "force deleted" event.
     */
    public function forceDeleted(Servicios $servicios): void
    {
        //
    }
}
