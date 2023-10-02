<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

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
}
