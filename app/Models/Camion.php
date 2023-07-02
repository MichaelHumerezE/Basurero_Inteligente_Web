<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'placa',
        'capacidad_personal',
        'capacidad_carga',
    ];
}