<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelos_auto extends Model
{
    use HasFactory;

    protected $fillable=["marca","modelo","modelo_year"];
}
