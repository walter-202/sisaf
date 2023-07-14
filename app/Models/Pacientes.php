<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' ,
        'last_name',
        'email',
        'sexo',
        'direccion',
        'fecha_de_nacimiento',
        'ciudad',
    ];

}
