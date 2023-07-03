<?php

namespace Database\Seeders;

use App\Models\Camion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CamionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Camion::create([
            'nombre' => 'Vehiculo 1',
            'placa' => '123ABC',
            'capacidad_personal' => '6',
            'capacidad_carga' => '1000',
        ]);
    }
}
