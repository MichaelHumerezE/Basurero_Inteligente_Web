<?php

namespace Database\Seeders;

use App\Models\Distrito;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Distrito::create([
            'nombre' => 'Distrito 1',
            'descripcion' => '',
            'id_zona' => 1
        ]);
    }
}
