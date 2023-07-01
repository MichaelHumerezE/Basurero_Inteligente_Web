<?php

namespace Database\Seeders;

use App\Models\Ruta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RutaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ruta::create([
            'nombre' => 'Ruta 1',
            'descripcion' => 'Ruta 1',
            'origen' => '{"lat":-17.774760150179436,"lng":-63.18223854858747}',
            'destino' => '{"lat":-17.77455581638336,"lng":-63.17777535278669}',
            'coordenadas' => '[{"lat":-17.774760150179436,"lng":-63.18223854858747},{"lat":-17.774637549929828,"lng":-63.18073651153913},{"lat":-17.774637549929828,"lng":-63.17949196655622},{"lat":-17.77455581638336,"lng":-63.17777535278669}]',
            'id_horario' => '1',
        ]);
    }
}
