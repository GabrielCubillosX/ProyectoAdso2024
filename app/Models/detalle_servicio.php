<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_servicio extends Model
{
    use HasFactory;
    protected $fillable=["registronovedad_id","servicio_id","repuesto_id","total"];
}
