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
            'placa' => '1852PHD',
            'image' => 'https://bucket-dataset-science.s3.amazonaws.com/imagenes/vehiculos/1788511315.jpg',
            'carpeta' => 'imagenes/vehiculos/1788511315.jpg',
            'capacidad_personal' => '6',
            'capacidad_carga' => '15000',
        ]);

        Camion::create([
            'nombre' => 'Vehiculo 2',
            'placa' => '1234ABC',
            'image' => 'https://bucket-dataset-science.s3.amazonaws.com/imagenes/vehiculos/1788511316.jpg',
            'carpeta' => 'imagenes/vehiculos/1788511316.jpg',
            'capacidad_personal' => '6',
            'capacidad_carga' => '15000',
        ]);

        Camion::create([
            'nombre' => 'Vehiculo 3',
            'placa' => '2052FBL',
            'image' => 'https://bucket-dataset-science.s3.amazonaws.com/imagenes/vehiculos/1788511317.jpg',
            'carpeta' => 'imagenes/vehiculos/1788511317.jpg',
            'capacidad_personal' => '6',
            'capacidad_carga' => '15000',
        ]);

        Camion::create([
            'nombre' => 'Vehiculo 4',
            'placa' => '2943ABC',
            'image' => 'https://bucket-dataset-science.s3.amazonaws.com/imagenes/vehiculos/1788511318.jpg',
            'carpeta' => 'imagenes/vehiculos/1788511318.jpeg',
            'capacidad_personal' => '6',
            'capacidad_carga' => '15000',
        ]);

        Camion::create([
            'nombre' => 'Vehiculo 5',
            'placa' => '1000BOL',
            'image' => 'https://bucket-dataset-science.s3.amazonaws.com/imagenes/vehiculos/1788511319.jpg',
            'carpeta' => 'imagenes/vehiculos/1788511319.jpg',
            'capacidad_personal' => '6',
            'capacidad_carga' => '15000',
        ]);

        Camion::create([
            'nombre' => 'Vehiculo 6',
            'placa' => '2291PSX',
            'image' => 'https://bucket-dataset-science.s3.amazonaws.com/imagenes/vehiculos/1788511320.jpg',
            'carpeta' => 'imagenes/vehiculos/1788511320.png',
            'capacidad_personal' => '6',
            'capacidad_carga' => '15000',
        ]);
    }
}
