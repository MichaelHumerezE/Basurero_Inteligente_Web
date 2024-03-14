<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Super Administrador',
            'apellidos' => '',
            'email' => 'admin@gmail.com',
            'password' => '123456',
            'ci' => '9866021',
            'sexo' => 'M',
            'phone' => '60522212',
            'domicilio' => 'Santa Cruz',
            'estado' => '1',
            'sueldo' => '3000',
            'tipoc' => '0',
            'tipoe' => '1',
            'image' => 'https://bucket-dataset-science.s3.amazonaws.com/imagenes/empleados/1688511326.png',
            'carpeta' => 'imagenes/empleados/1688511326.png',
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Michael',
            'apellidos' => 'Humerez',
            'email' => 'Michael@gmail.com',
            'password' => '123456',
            'ci' => '9866024',
            'sexo' => 'M',
            'phone' => '60522214',
            'domicilio' => 'Santa Cruz',
            'estado' => '1',
            'sueldo' => '3000',
            'tipoc' => '0',
            'tipoe' => '1',
            'image' => 'https://bucket-dataset-science.s3.amazonaws.com/imagenes/empleados/1688511314.png',
            'carpeta' => 'imagenes/empleados/1688511314.png',
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Brayan',
            'apellidos' => 'Myers',
            'email' => 'Brayan@gmail.com',
            'password' => '123456',
            'ci' => '9866022',
            'sexo' => 'M',
            'phone' => '60522211',
            'domicilio' => 'Santa Cruz',
            'estado' => '1',
            'sueldo' => '2500',
            'tipoc' => '0',
            'tipoe' => '1',
            'image' => 'https://bucket-dataset-science.s3.amazonaws.com/imagenes/empleados/1688511315.png',
            'carpeta' => 'imagenes/empleados/1688511315.png',
        ])->assignRole('Conductor');

        User::create([
            'name' => 'Camilo',
            'apellidos' => 'Waller',
            'email' => 'Camilo@gmail.com',
            'password' => '123456',
            'ci' => '9866023',
            'sexo' => 'M',
            'phone' => '60522213',
            'domicilio' => 'Santa Cruz',
            'estado' => '1',
            'sueldo' => '2500',
            'tipoc' => '0',
            'tipoe' => '1',
            'image' => 'https://bucket-dataset-science.s3.amazonaws.com/imagenes/empleados/1688511316.png',
            'carpeta' => 'imagenes/empleados/1688511316.png',
        ])->assignRole('Conductor');

        User::create([
            'name' => 'Kane',
            'apellidos' => 'Grimes',
            'email' => 'Kane@gmail.com',
            'password' => '123456',
            'ci' => '1247635',
            'sexo' => 'M',
            'phone' => '70055574',
            'domicilio' => 'Santa Cruz',
            'estado' => '1',
            'sueldo' => '2500',
            'tipoc' => '0',
            'tipoe' => '1',
            'image' => 'https://bucket-dataset-science.s3.amazonaws.com/imagenes/empleados/1688345509.png',
            'carpeta' => 'imagenes/empleados/1688345509.png',
        ])->assignRole('Conductor');

        User::create([
            'name' => 'Reese',
            'apellidos' => 'Horn',
            'email' => 'Reese@gmail.com',
            'password' => '123456',
            'ci' => '6533104',
            'sexo' => 'M',
            'phone' => '63344472',
            'domicilio' => 'Santa Cruz',
            'estado' => '1',
            'sueldo' => '2500',
            'tipoc' => '0',
            'tipoe' => '1',
            'image' => 'https://bucket-dataset-science.s3.amazonaws.com/imagenes/empleados/1688511318.png',
            'carpeta' => 'imagenes/empleados/1688511318.png',
        ])->assignRole('Recogedor');

        User::create([
            'name' => 'Noah',
            'apellidos' => 'Conner',
            'email' => 'Noah@gmail.com',
            'password' => '123456',
            'ci' => '5844214',
            'sexo' => 'M',
            'phone' => '71455620',
            'domicilio' => 'Santa Cruz',
            'estado' => '1',
            'sueldo' => '2500',
            'tipoc' => '0',
            'tipoe' => '1',
            'image' => 'https://bucket-dataset-science.s3.amazonaws.com/imagenes/empleados/1688511319.png',
            'carpeta' => 'imagenes/empleados/1688511319.png',
        ])->assignRole('Recogedor');

        User::create([
            'name' => 'Dylan',
            'apellidos' => 'Allen',
            'email' => 'Dylan@gmail.com',
            'password' => '123456',
            'ci' => '6527194',
            'sexo' => 'M',
            'phone' => '65798924',
            'domicilio' => 'Santa Cruz',
            'estado' => '1',
            'sueldo' => '2500',
            'tipoc' => '0',
            'tipoe' => '1',
            'image' => 'https://bucket-dataset-science.s3.amazonaws.com/imagenes/empleados/1688511320.png',
            'carpeta' => 'imagenes/empleados/1688511320.png',
        ])->assignRole('Recogedor');

        User::create([
            'name' => 'Ryan',
            'apellidos' => 'Blevins',
            'email' => 'Ryan@gmail.com',
            'password' => '123456',
            'ci' => '6570030',
            'sexo' => 'M',
            'phone' => '60012300',
            'domicilio' => 'Santa Cruz',
            'estado' => '1',
            'sueldo' => '2500',
            'tipoc' => '0',
            'tipoe' => '1',
            'image' => 'https://bucket-dataset-science.s3.amazonaws.com/imagenes/empleados/1688511321.png',
            'carpeta' => 'imagenes/empleados/1688511321.png',
        ])->assignRole('Recogedor');

        User::create([
            'name' => 'Jerome',
            'apellidos' => 'Miranda',
            'email' => 'Jerome@gmail.com',
            'password' => '123456',
            'ci' => '9617000',
            'sexo' => 'M',
            'phone' => '70001201',
            'domicilio' => 'Santa Cruz',
            'estado' => '1',
            'sueldo' => '2500',
            'tipoc' => '0',
            'tipoe' => '1',
            'image' => 'https://bucket-dataset-science.s3.amazonaws.com/imagenes/empleados/1688511322.png',
            'carpeta' => 'imagenes/empleados/1688511322.png',
        ])->assignRole('Recogedor');

        User::create([
            'name' => 'Jaime',
            'apellidos' => 'Booner',
            'email' => 'Jaime@gmail.com',
            'password' => '123456',
            'ci' => '5524101',
            'sexo' => 'M',
            'phone' => '76421325',
            'domicilio' => 'Santa Cruz',
            'estado' => '1',
            'sueldo' => '2100',
            'tipoc' => '0',
            'tipoe' => '1',
            'image' => 'https://bucket-dataset-science.s3.amazonaws.com/imagenes/empleados/1688511323.png',
            'carpeta' => 'imagenes/empleados/1688511323.png',
        ])->assignRole('Ayudante');

        User::create([
            'name' => 'Tobias',
            'apellidos' => 'Perry',
            'email' => 'Tobias@gmail.com',
            'password' => '123456',
            'ci' => '4756147',
            'sexo' => 'M',
            'phone' => '74520014',
            'domicilio' => 'Santa Cruz',
            'estado' => '1',
            'sueldo' => '2100',
            'tipoc' => '0',
            'tipoe' => '1',
            'image' => 'https://bucket-dataset-science.s3.amazonaws.com/imagenes/empleados/1688511324.png',
            'carpeta' => 'imagenes/empleados/1688511324.png',
        ])->assignRole('Ayudante');

        User::create([
            'name' => 'Scott',
            'apellidos' => 'Dickerson',
            'email' => 'Scott@gmail.com',
            'password' => '123456',
            'ci' => '6584201',
            'sexo' => 'M',
            'phone' => '63001241',
            'domicilio' => 'Santa Cruz',
            'estado' => '1',
            'sueldo' => '2100',
            'tipoc' => '0',
            'tipoe' => '1',
            'image' => 'https://bucket-dataset-science.s3.amazonaws.com/imagenes/empleados/1688511325.png',
            'carpeta' => 'imagenes/empleados/1688511325.png',
        ])->assignRole('Ayudante');
    }
}
