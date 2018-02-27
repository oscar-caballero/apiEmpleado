<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['nombre', 'email','puesto','fecha_nacimiento','domicilio','latitud','longitud'];
}
