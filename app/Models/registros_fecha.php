<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registros_fecha extends Model
{
    use HasFactory;

    protected $fillable=["fechahora_entrada","fechahora_salida"];
}
