<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Carbon\CarbonInterval;
use Carbon\Carbon;

class Horarios extends Model implements Auditable
{
    use HasFactory;
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    public $allow_export_all = true;

    protected $fillable = [
        'day',
        'from',
        'to',
        'step',
        'off',
        'servicio_id',
    ];
    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:i',
        'updated_at' => 'datetime:d-m-Y H:i',
        'deleted_at' => 'datetime:d-m-Y H:i',
    ];
    public function servicios(): BelongsTo
    {
        return $this->belongsTo(Servicios::class, 'servicio_id');
    }

    public function getTimesPeriodAttribute()
    {
        $hoy = Carbon::now()->isoFormat('dddd');
        $times = CarbonInterval::minutes($this->step)->toPeriod($this->from, $this->to)->excludeEndDate()->toArray();
        return array_map(function ($time) use($hoy) {
            if ( $this->day == $hoy && !$time->isPast() ) {
                return $time->format('H:i');
            }
            if ( $this->day != $hoy ){
                return $time->format('H:i');
            }
        }, $times);
    }
}
