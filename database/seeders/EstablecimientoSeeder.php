<?php

namespace Database\Seeders;

use App\Models\establecimiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstablecimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Establecimiento::create([
            'nombre' => 'barrio transportista sur',
            'id_ruta' => 3,
            'id_distrito' => 9,
            'id_red' => 1,
        ]);

        Establecimiento::create([
            'nombre' => 'barrio Militar',
            'id_ruta' => 4,
            'id_distrito' => 9,
            'id_red' => 1,
        ]);
    }
}
