<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Pacientes extends Model implements Auditable
{
    use HasFactory;
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;
    public $allow_export_all = true;

    protected $fillable = [
        'documento',
        'tipo_documento',
        'name' ,
        'last_name',
        'last_name_m',
        'last_name_c',
        'celular',
        'email',
        'sexo',
        'direccion',
        'fecha_de_nacimiento',
        'ciudad',
        'barrio',
        'ocupacion',
        'grado',
        'edad',
        'referido',
        'familiar',
    ];
    protected $dates = ['deleted_at'];
    public function getFullDataAttribute()
    {
        return $this->documento . ' ' . $this->name . ' ' . $this->last_name . ' ' . $this->last_name_m . ' ' . $this->email;
    }public function getFullNameAttribute()
    {
        return $this->name . ' ' . $this->last_name . ' ' . $this->last_name_m ;
    }
    public $additional_attributes = ['full_data', 'full_name'];
    public function citas()
{
    return $this->hasMany(Cita::class);
}
}
