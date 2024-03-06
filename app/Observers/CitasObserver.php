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
    protected $request;
    protected $paciente;
    protected $doctor;
    protected $motivo;
    protected $inicio;
    protected $fin;
    /**
     * Handle the Cita "created" event.
     */
    public function __construct(Request $request, Pacientes $paciente, User $doctor)
    {
        $this->request = $request;
        $this->paciente = $paciente;
        $this->doctor = $doctor;
        $this->value = $this->request->input('duracion');
        $this->motivo = $this->request->input('motivo');
        $this->inicio = Carbon::parse($this->request->input('date') . ' ' . $this->request->input('time'));
        $this->fin = (clone $this->inicio)->addMinutes($this->value);

    }

    private function enviarEmail($motivo, $inicio, $fin, $value)
    {
        foreach ([$this->paciente->email, $this->doctor->email] as $recipient) {
            Mail::to($recipient)->send(new EmailCita($motivo, $inicio, $fin, $value));
        }
    }

    public function created(Cita $cita): void
    {
        $event = new Event;
        $event->name = $this->motivo;
        $event->startDateTime  = $this->inicio;
        $event->endDateTime  =  $this->fin;
        $google_id = $event->save();
        $cita->update(['g_id' => $google_id->id]);
        $this->enviarEmail($this->motivo, $this->inicio, $this->fin, $this->value);
    }

    /**
     * Handle the Cita "updated" event.
     */
    public function updated(Cita $cita): void
    {
        $event = Event::find($cita->g_id);
        $event->update([
            'name' => $this->motivo,
            'startDateTime'  => $this->inicio,
            'endDateTime'  =>  $this->fin,
        ]);

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
        $inicio = Carbon::parse($cita->date . ' ' . $cita->time);
        $fin = (clone $inicio)->addMinutes($cita->duracion);
        $event = new Event;
        $event->name = $cita->motivo;
        $event->startDateTime  = $inicio;
        $event->endDateTime = $fin;
        $google_id =$event->save();
        $cita->update(['g_id' => $google_id->id]);

    }
}
