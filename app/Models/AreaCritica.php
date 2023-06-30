<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaCritica extends Model
{
    use HasFactory;

    protected $fillable = [
        'polyline',
        'id_ruta',
    ];
}
