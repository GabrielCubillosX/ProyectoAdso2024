<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propietario extends Model
{
    use HasFactory;
    protected $fillable=["nombres","apellidos","cedula","fecha_nacimiento","contactos_id"];
}
