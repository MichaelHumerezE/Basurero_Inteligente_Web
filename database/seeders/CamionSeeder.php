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
            'image' => 'https://storage.googleapis.com/smart-trucks-41e25.appspot.com/Vehiculos/1788511315.jpg?GoogleAccessId=firebase-adminsdk-r5qsx%40smart-trucks-41e25.iam.gserviceaccount.com&Expires=1689379200&Signature=q9KwsdU0isH5GircNl24EFmg4Gk4XlwwOZgN91ZiqicjasczxFAI%2Br5mp47g4E%2Bj%2FrJND1Mz0Mgp8VFqu74IWCTEbAlibid8YW0Rm1P%2BwF2mwEikyJLRkM1SQACeycUWA%2Fs8sFtg2kmmpLTMyRWjMhUNNzp3VyNFgecEDeX2ctskuJzs70oLgfFElkxc6o30h5XxYh4T7Bl2lFCIGL695hjYxBlxMsjis7ZIdC1A4SRxwsuH8hQ04jRTHD02pILZsm3n2JiosASL9vN20EskrlNpzRuQKuDJ2SMrZwW8GizbRpFqbpv0tvb2HEsgQrnlK7xRJKgsdD3fwxijjkxz7Q%3D%3D',
            'carpeta' => 'Vehiculos/1788511315.jpg',
            'capacidad_personal' => '6',
            'capacidad_carga' => '15000',
        ]);

        Camion::create([
            'nombre' => 'Vehiculo 2',
            'placa' => '1234ABC',
            'image' => 'https://storage.googleapis.com/smart-trucks-41e25.appspot.com/Vehiculos/1788511316.jpg?GoogleAccessId=firebase-adminsdk-r5qsx%40smart-trucks-41e25.iam.gserviceaccount.com&Expires=1689379200&Signature=gfBY5mGJo8g3NYs1bPLBbRAsVpolizCUSU6p4L6gwfxsbF8tSVZZAXPqkJMOiCtAf94dJ41w8UE0YcJT0dw8P4X14oRHgCN1nQppKffuTRtoZNPV2E3aebmMuc1xcOHj3mHlE6x%2FxmGF9QubwMbvaTBP0B8mRgT7FjlQW2J3uguP14PYCWXwE6YI8BLq%2FgNFYhtAz3EC%2FPcathtahuW8757zqZ3gt5nEqbJ5y%2FpwV%2Bg0jvEmie9tuTkQrlOew7X13bUAxzY%2Ftf4NloPQgq68P8S68qADhlX%2Bcvy1%2BACnkGOoEcYhHvnMyYhXIhASBOCe0b8l6r20GFmbX47coeTtOA%3D%3D',
            'carpeta' => 'Vehiculos/1788511316.jpg',
            'capacidad_personal' => '6',
            'capacidad_carga' => '15000',
        ]);

        Camion::create([
            'nombre' => 'Vehiculo 3',
            'placa' => '2052FBL',
            'image' => 'https://storage.googleapis.com/smart-trucks-41e25.appspot.com/Vehiculos/1788511317.jpg?GoogleAccessId=firebase-adminsdk-r5qsx%40smart-trucks-41e25.iam.gserviceaccount.com&Expires=1689379200&Signature=I4%2FypvIWSkI0cEg8kuh5QV0mbex1E7ujwKvvmeyABJPmh%2FI2GY1fYP01xw1tNL3dHPTPXOCccD6iBAJ5ieOCefNn0n415C3n5DSuss35GRMpDJsbnzAjeEb9tzqpE2gQgQ9ASoewkW7TkzdLp7GHy1aCfC0Tlr0aacTH20mJvr3j%2B9uo3IJjvWszhXzi5UE3ZWbCmhU3M7RSSRYX6JgZfAfkC3QbZYBCHZFjg7dqNz0n3LTl9a%2Fkf0Fviwe8tlnNezHAmChma42CRRbBzaYpY7owcMmY5IGtPAZTT%2BWp1rv3idMhO4pNSlyN0Qkc%2FFON2X1rKRmx%2BEfP0s7kJsjR6g%3D%3D',
            'carpeta' => 'Vehiculos/1788511317.jpg',
            'capacidad_personal' => '6',
            'capacidad_carga' => '15000',
        ]);

        Camion::create([
            'nombre' => 'Vehiculo 4',
            'placa' => '2943ABC',
            'image' => 'https://storage.googleapis.com/smart-trucks-41e25.appspot.com/Vehiculos/1788511318.jpeg?GoogleAccessId=firebase-adminsdk-r5qsx%40smart-trucks-41e25.iam.gserviceaccount.com&Expires=1689379200&Signature=cI%2FRnGfhUlM3L8zrlA4y5V%2BRteTDvxnsdwBXieIshBRSX0tR8mchw3dmzaC%2Fi%2B94h2SSpeFEl4kVzvLWtpwG9VYk5dlo4xYC5mycitmi%2FpdKYtBrEbOAQ%2FjnNfYh7Gd%2Fie0efm%2B2%2FnK73lZ851vZdKHyMzKiborcklrk9gZIGJO9RU7hvp26V0OmtU%2FzgveZwyWW%2FUuZtGTxleatFmHZAy7ZC5Dklt1pBjz4zr5nb7y8x35Z5Bw7QmX5S2Wp6S%2BdeBpiCnCyAqpmEXoLpdp%2BMp4XSIuCPCFt39vi9IHdVzMyABHINZ1xoLs%2FOzBwusTC%2F9nnN6TCGwbiVLxiF30x5g%3D%3D',
            'carpeta' => 'Vehiculos/1788511318.jpeg',
            'capacidad_personal' => '6',
            'capacidad_carga' => '15000',
        ]);

        Camion::create([
            'nombre' => 'Vehiculo 5',
            'placa' => '1000BOL',
            'image' => 'https://storage.googleapis.com/smart-trucks-41e25.appspot.com/Vehiculos/1788511319.jpg?GoogleAccessId=firebase-adminsdk-r5qsx%40smart-trucks-41e25.iam.gserviceaccount.com&Expires=1689379200&Signature=QtNOg6qZSyy51HqG17cNAkUemMGHha6r0HQYyLR3u855O9iAK9uWVAzSFMoj18VLVyd8hJNVCXtJeXh1xnYemAm%2BlmFrRpkWk2nRpiQif4EzosXdaejkTonCeIWIyBy8Sbgk0LP6wQYG3S112S%2FDhW%2Flg8w3IupO2juOBRDEKWxuRhZB%2BQkMJQAIGU3afPpPdtzUZucBk6NlbxtFdy5XfnfX2kDe9Cl2HPJ4KGAGupR8GZ9GzKSSO8OpWhWuEj5BUg1ycTPnPZh9QjSKDSBQO8AlKpWf70UeWhqfDzOjsXbdV1tH2h8%2BlYJPzhRUyd%2BaUuCllP7KcqT44eVtCgBRfA%3D%3D',
            'carpeta' => 'Vehiculos/1788511319.jpg',
            'capacidad_personal' => '6',
            'capacidad_carga' => '15000',
        ]);

        Camion::create([
            'nombre' => 'Vehiculo 6',
            'placa' => '2291PSX',
            'image' => 'https://storage.googleapis.com/smart-trucks-41e25.appspot.com/Vehiculos/1788511320.png?GoogleAccessId=firebase-adminsdk-r5qsx%40smart-trucks-41e25.iam.gserviceaccount.com&Expires=1689379200&Signature=h6rZHUuRkG8sxPKJiHK4Dk1Yd7PHcV5TKMrwLZXNo%2F3EHCHAlKYZ6vLHtpEwGbWYvL7YdzdwwqGmGIzJktB7MRs1vbZX9a8QHbAvjNt6aqRSB4eKjxjadTzSSH2lr1cgWVQNMscGKp%2BoAtj%2BkWGbGdVxv3uRIe9NXzSiKkhFCzqzqKEORuLhXgtOAeN8HHl2z5nEBRX6gDYbTD6o5nrQDaMOGRjyy52I0D0%2BbrWgax2xrx9lrIKeRGd0WRl1o4H2wXxCYflYkZZiwZbeCXapwRuIir6Tp08qqvZWuwdWzJtiF5zgORAhJ%2F%2FfZTzbTws6f%2BesV4lePy8IMi183YypSQ%3D%3D',
            'carpeta' => 'Vehiculos/1788511320.png',
            'capacidad_personal' => '6',
            'capacidad_carga' => '15000',
        ]);
    }
}
