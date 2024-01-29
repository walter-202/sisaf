<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Cita extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $casts = [
        'time' => 'datetime:H:i'
    ];
    public $allow_export_all = true;

    protected $guarded = [];

    public function getTimeeAttribute()
    {
        return $this->attributes['time']->format('H:i');
    }
    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('d-m-Y');
    }
    public function paciente(): BelongsTo
    {
        return $this->belongsTo(Pacientes::class, 'paciente_id');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function servicio(): BelongsTo
    {
        return $this->belongsTo(Servicios::class, 'servicio_id');
    }
}
