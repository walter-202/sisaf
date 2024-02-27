<?php

namespace App\Observers;

use App\Mail\EmailCita;
use App\Models\Cita;
use App\Models\Pacientes;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Spatie\GoogleCalendar\Event;


class CitasObserver
{
    /**
     * Handle the Cita "created" event.
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function created(Cita $cita): void
    {
        $Paciente = Pacientes::select('name', 'email')->find($this->request->input('paciente_id'));
        $Doctor = User::select('name', 'email')->find($this->request->input('user_id'));
        $value = $this->request->input('step');
        $motivo = $this->request->input('motivo');
        $inicio = Carbon::parse($this->request->input('date') . ' ' . $this->request->input('time'));
        $fin = (clone $inicio)->addMinutes($this->request->input('step'));
        $event = new Event;
        $event->name = $this->request->input('motivo');
        $event->startDateTime  = $inicio;
        $event->endDateTime  =  $fin;

        $google_id = $event->save();
        $cita->update(['g_id' => $google_id->id]);
        foreach ([$Paciente->email, $Doctor->email] as $recipient) {
            Mail::to($recipient)->send(new EmailCita($motivo, $inicio, $fin, $value));
        }
    }

    /**
     * Handle the Cita "updated" event.
     */
    public function updated(Cita $cita): void
    {
        //
    }

    /**
     * Handle the Cita "deleted" event.
     */
    public function deleted(Cita $cita): void
    {
        $event = Event::find($cita->g_id);
        $event->delete();
    }

    /**
     * Handle the Cita "restored" event.
     */
    public function restored(Cita $cita): void
    {
        //
    }
}
