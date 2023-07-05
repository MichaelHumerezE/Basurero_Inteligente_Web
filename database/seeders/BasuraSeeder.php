<?php

namespace Database\Seeders;

use App\Models\Basura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BasuraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Basura::create([
            'tipo' => 'Residuos Domiciliarios',
        ]);

        Basura::create([
            'tipo' => 'Residuos de Mercados',
        ]);

        Basura::create([
            'tipo' => 'Residuos Industriales y Comerciales',
        ]);

        Basura::create([
            'tipo' => 'Residuos Hospitalarios',
        ]);
    }
}
