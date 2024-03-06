<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;


class Cita extends Model implements Auditable
{
    use SoftDeletes;
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'motivo',
        'servicio_id',
        'date',
        'time',
        'duracion',
        'g_id',
        'user_id',
        'paciente_id',
    ];

    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:i',
        'updated_at' => 'datetime:d-m-Y H:i',
        'deleted_at' => 'datetime:d-m-Y H:i',

    ];
    public function getFromAttribute()
{
    return \Carbon\Carbon::createFromFormat('H:i', $this->attributes['time']);
}
    public $allow_export_all = true;

    protected $guarded = [];

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
