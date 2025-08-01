<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    protected $table = 'cliente'; // si no usas plural, Laravel no lo adivina

    protected $fillable = [
        'nombres',
        'apellidos',
        'direccion',
        'celular',
        'nit'
    ];
}
