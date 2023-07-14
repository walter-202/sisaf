<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiales extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' ,
        'descripcion',
        'costo',
        'cantidad',
        'costo_actual',
        'costo_ultimo',
    ];
}
