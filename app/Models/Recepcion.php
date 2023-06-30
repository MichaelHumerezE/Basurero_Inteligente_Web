<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recepcion extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'cantidad',
        'id_basura',
        'id_ruta',
    ];
}
