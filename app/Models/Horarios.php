<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Horarios extends Model implements Auditable
{
    use HasFactory;
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    public $allow_export_all = true;

    protected $fillable = [
        'day' ,
        'from',
        'to',
        'step',
        'off',
        'servicio_id',
    ];
    public function servicios(): BelongsTo
{
    return $this->belongsTo(Servicios::class);
}
}
