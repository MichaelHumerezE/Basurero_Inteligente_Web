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
            'id_distrito' => '1',
        ]);
        Ruta::create([
            'nombre' => 'Ruta 2',
            'descripcion' => 'Ruta 2',
            'origen' => '{"lat":-17.774718634024982,"lng":-63.18207655344691}',
            'destino' => '{"lat":-17.777088889537243,"lng":-63.18756971750941}',
            'coordenadas' => '[{"lat":-17.774718634024982,"lng":-63.18207655344691},{"lat":-17.775495100499903,"lng":-63.183707336527966},{"lat":-17.775781166245554,"lng":-63.18503771219935},{"lat":-17.776148964388565,"lng":-63.186239341838025},{"lat":-17.77676195961147,"lng":-63.18705473337855},{"lat":-17.777088889537243,"lng":-63.18756971750941}]',
            'id_horario' => '1',
            'id_distrito' => '1',
        ]);
    }
}
