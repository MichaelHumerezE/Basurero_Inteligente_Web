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
            'image' => 'https://storage.googleapis.com/smart-trucks-41e25.appspot.com/Empleados/1688511326.png?GoogleAccessId=firebase-adminsdk-r5qsx%40smart-trucks-41e25.iam.gserviceaccount.com&Expires=1689379200&Signature=ljf8czrjpS5S1%2FGB8cs4geTH8OcfKOWgKmlKVQRIMapMTSPYBegTpxEzG4BwgqPAcdMurXKi7fABNavWYeztrKHcOkwvL0%2B3K9S4caQZLWyXw0B0naWxOVE%2Fh5xxgGwgS4X7Qhz02OlH98uhHSmvm4pWZVB%2FpOu2g1VZMoHsKTfVt0VY1PkKwAShmDjpCJUzQFJFVM5GLv3s7wsHkbWCetJowxqoN04vdwcnLqK9jD1E%2Bz1oR%2Bv9w1GZ5PFL7KD9Et4bgB2aAyXZVtmIWnriuiDNXzoOk4%2B4R1ZhEyE6Vp8I1VySG5oGJpQ54wXt0tnSvWBKDAKrT7vMux7%2BJMu%2BUw%3D%3D',
            'carpeta' => 'Empleados/1688511326.png',
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
            'image' => 'https://storage.googleapis.com/smart-trucks-41e25.appspot.com/Empleados/1688511314.png?GoogleAccessId=firebase-adminsdk-r5qsx%40smart-trucks-41e25.iam.gserviceaccount.com&Expires=1689379200&Signature=VCtCQdW3fyzYPLzp3wHtZ7HcFGtxF9MBDEUkBd3yQgLfAEvcAg41w3kyDWkPE8N6Yr9X9T4gvo%2B0eYmEHLvlerme8CnbZTQTp4piqqF%2BI0r865ynMLT%2BYdOa5U%2FhJpQCBhWRn0DC5fcET79fVPQNutfwKBB3buBQvvAy60IzaP76gRCfsxUjY%2BpsAc2MADr%2F%2FFPfIVBWirIdEdCKU6dIIYsJbU6yMLYbq19Zu4AsCuf3ZWijCZvcvV6vCZx2sGqN9b57n3FXtqPA3WSHgGdJpTMaWHgrW8%2BRxhnFH%2BzneKvvhpG3s2Y7z84nLeV3w%2BsXdEIlKMEgwejt85qO9nh7KA%3D%3D',
            'carpeta' => 'Empleados/1688511314.png',
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
            'image' => 'https://storage.googleapis.com/smart-trucks-41e25.appspot.com/Empleados/1688511315.png?GoogleAccessId=firebase-adminsdk-r5qsx%40smart-trucks-41e25.iam.gserviceaccount.com&Expires=1689379200&Signature=TN8FO2w9D%2F6xLJDE6fd4Vo%2FAhifF5WdMc2ou8x2KUb3%2BRIlUEDYYTIFIPyGG23PItr5T1Q9iIIjG%2FYUQKo5eizqYTYC8zBxAffNI0gjF4Cro3V5uRFjqT1dK6rXtGPkBjKf2110S3uRH9xlUzYORXzNfYY0t5qenVt6FfA%2Fwf%2BRSlYWLNigXFe6BzmotPwQ3B2M8%2FfQaKOHvBwXnvxwIwYBQv0Ql104n6WYQgpkM7hJJ1ZnjJXK6YGA0jEw6lO0YDpMr5EzSSpf88YfrtIe58J3Erpx5d3BhpRwMa%2FxoAcHD9poArZhEJWiLBapBQzYc%2Fh1rgTXv7PSdd4ewZUTgcw%3D%3D',
            'carpeta' => 'Empleados/1688511315.png',
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
            'image' => 'https://storage.googleapis.com/smart-trucks-41e25.appspot.com/Empleados/1688511316.png?GoogleAccessId=firebase-adminsdk-r5qsx%40smart-trucks-41e25.iam.gserviceaccount.com&Expires=1689379200&Signature=r%2Bz9sndpvoXELQaovy6rfSBWxVal9KXJu8p8PTEj4xrfHxHu6Aok9zn%2FGJUvvchbuWZZ4RSnfDn2ppz9RVkIKpMetcNDrfEeHeobrTxntK%2FlisS%2BVT0h%2F2GkeLGVxSxpijuFbPabSi%2BAMVHymDUvc3M9%2FgRiE7sAMBNSLiA1yjFT%2FMoaATFrUxahk7RoL8e%2FeHDVNk6nLhIby858rmbgcok45Nd3k%2BYwF%2Bgqkix9m685pmFfykfydJpoQQUHKibwQ%2BQJM84Ft3l8%2FI0pgE%2BleXngdasOfFiRn0v9uV8Dfk6RjQYo3thb3DPMiUuz9AmYG2rnWoSOfsEX9nf3Zv5vmw%3D%3D',
            'carpeta' => 'Empleados/1688511316.png',
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
            'image' => 'https://storage.googleapis.com/smart-trucks-41e25.appspot.com/Empleados/1688345509.png?GoogleAccessId=firebase-adminsdk-r5qsx%40smart-trucks-41e25.iam.gserviceaccount.com&Expires=1689379200&Signature=EGw%2BmE2WnwAFNOOy4Z64EyOYleU1FBsQHAAnZ61lf0sEgtIULzpjf5dEa8jGak1A0Ryg5o%2FtbpGWUX3T1tVVftHz5xGkumPYt3i1vxFq6quc%2BHAfhNUzWrNOVaCUjLoPxTWDerbZwadjqjPvik17hOOjfEfqR5iibKJov4RFJusaCT4LEbfoElzHz78FFI9ZJScb%2F2pYnuSLBKwqh5A7cUJ08kzivsSDkT2IImUqhBRSi4DFxVnPiioU0ygYl0uygHu72cg4Vq4q7eEziMtbP2EUf%2FqxTLVkaPVnnz8edcTr9vEyFqRnTVYFTmK9hYyN1M2VJVdD2uMBrD1eISO%2Fng%3D%3D',
            'carpeta' => 'Empleados/1688345509.png',
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
            'image' => 'https://storage.googleapis.com/smart-trucks-41e25.appspot.com/Empleados/1688511318.png?GoogleAccessId=firebase-adminsdk-r5qsx%40smart-trucks-41e25.iam.gserviceaccount.com&Expires=1689379200&Signature=BrA%2BplsQems2Loqod1FCHGCuh11dcAZPG2Kb%2BDh5ltye8KtFNQRYCj%2FnrgZiu4ArYPR6O5XsBDBlPY56quNRwdqJIxmx9pj0gaDmOD2K7zCP9nv%2FxuJ6G3Y5%2BTefJo1u6HXPdeGzuqjEojtjhzOR7gj97DGr%2B%2FapAvljefm8DOXPEj4xp3yKbnbpqYfUA43uH2NiVcwp7qHaiEnjYzVUd8f2vIZ2LtAN9IwIZ3kyz3ZjPg1sXlYqSzf24s%2FcEBpIsMYCZWo3bfjv16NlKTnO93fznpE2vFVTkd7J9zwXrRMi5ybnQ48z16Y6FAKx0GhxpwYkMv6UL5JvuXXQA%2FdjWA%3D%3D',
            'carpeta' => 'Empleados/1688511318.png',
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
            'image' => 'https://storage.googleapis.com/smart-trucks-41e25.appspot.com/Empleados/1688511319.png?GoogleAccessId=firebase-adminsdk-r5qsx%40smart-trucks-41e25.iam.gserviceaccount.com&Expires=1689379200&Signature=WRhF8WL0JRjqQ%2BoYYoF0NioAQB%2BaHCOrxRJmSzCaEDjoGGirPX3QjpYur97Fv%2BbsJMoEr2YCFbKk%2FagLC%2B3Ai%2BBOC%2BLKGsVOcIhqc6m%2FzwmbjirQ3hmgMt5m9ThsHnove0i2HAG%2BNpu%2BuhUFtZxakstmnum77sDzYLY92t83AOmbz%2BtW7kOVmm%2BuRs5jrSQvWwXI61rGbjGCytm0NSuD5k42ehkTIN2E2WlslHRO7mYa07Lk7GCq9quIFfr2KdMr4Lxbv6zRys7g9Djs0tH36qSHTTM5azLUCuaS0vY7af4xx0tstwpdAd2DrDHOJWJqDYwmHJ1XZmlOd16tp8lUvw%3D%3D',
            'carpeta' => 'Empleados/1688511319.png',
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
            'image' => 'https://storage.googleapis.com/smart-trucks-41e25.appspot.com/Empleados/1688511320.png?GoogleAccessId=firebase-adminsdk-r5qsx%40smart-trucks-41e25.iam.gserviceaccount.com&Expires=1689379200&Signature=qMTsePi0sElgChLhHJ2R8HMm3A%2FXLZ42IP8aO710UO4pcGbLnhGwMwDq1N7AE1X%2Fy2rHqub4jnYaXxoC9u9TSkvYXRM8ssxKy6OisrnPpi8am4%2BUEhhk4yovT3UIzo4Ccv9AE%2Fa%2Frxw0VHk%2F9gaMKqfy7OUS0wsO9OYAa62enIPDm5gTYoxAGNg5we4ZOfUrDmfzsUPeNdKMmphKg%2Fzus71F1Mmq8lTE2IpP%2BN7jtTQHDZLJiPudI79pAUbOyFPrZyPuZusYBAm6jAN5cgz%2F0UPBcSF0yuRyoLJh1h5ijXHwhJpPR1Jph9Mm2e7m4WCPHfRSxBS2M8dioGKCjmJmVQ%3D%3D',
            'carpeta' => 'Empleados/1688511320.png',
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
            'image' => 'https://storage.googleapis.com/smart-trucks-41e25.appspot.com/Empleados/1688511321.png?GoogleAccessId=firebase-adminsdk-r5qsx%40smart-trucks-41e25.iam.gserviceaccount.com&Expires=1689379200&Signature=UpO%2BwNbHj5%2FV2gt%2B0hJ7NLrIHJKS%2Fp4hb%2Bxvm8fvKQaCTXxKYtS2XLZgAshEekTnYtqPP7hUmA8LLqvoiSeukCI98g1AoEzXnZ01hTVyU1ewTyeBlPnExaJx%2B1PzQl1JS2OkPovDR%2FhMo3heXUyygd5m6POoX7DCu1VWK17hpNBu51mK6WiGOquSe9PrbwutrB5%2BwqdbaOUahiYe1%2FAwTieC5osjYErw%2FyyFLywJ8MpoYE44HGtbfd3xlk7pV%2Bm1VQShuBC4LIRiU0r9F%2BFBcKm3SBMFChSO%2BXDDpOWLJP3oc10ebziS5OB6dUH9AkMupiBy9FB%2B6IEuaQxy9RrU%2Fg%3D%3D',
            'carpeta' => 'Empleados/1688511321.png',
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
            'image' => 'https://storage.googleapis.com/smart-trucks-41e25.appspot.com/Empleados/1688511322.png?GoogleAccessId=firebase-adminsdk-r5qsx%40smart-trucks-41e25.iam.gserviceaccount.com&Expires=1689379200&Signature=aHfgH3UUvzsQpTPWXiqQFp6O85W8aS10ZqtPfrR8AjmCrxG0EyGciNEm3FcQlG7fL6zFbSAsZT8IkUcLnDkkfOs6woaljI7Q5IIIVqrAX2BpiHUc4np9Z8vltqOYd8mq3kixCL9z50hTzkha4Uxygy4URSXtOOq0SX3qMuEtPb6oBfGLnNGaQG77H1sqaKOcEB1JPKE%2F8z6LSHPLXssuLAhgBIulkIZ0LOtRdCx2r45uGT79ALvadEfXqz1IHcHdv1HKg4XDXOFNYryEs6JhODYgSMkcWZ13N%2FZazj3PAHoVWG23MB22kwvIR1FsRAO5nTlHoqxR1QOZ5acJriSrVA%3D%3D',
            'carpeta' => 'Empleados/1688511322.png',
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
            'image' => 'https://storage.googleapis.com/smart-trucks-41e25.appspot.com/Empleados/1688511323.png?GoogleAccessId=firebase-adminsdk-r5qsx%40smart-trucks-41e25.iam.gserviceaccount.com&Expires=1689379200&Signature=SK8ezcEH3H7LmEcRufZqVmG79763p%2FoPY9ASxQo6x55QK6IJm4rcgbNceXTHqckfWuoLXvWShe6Xs0uUq8k37HC5UqTzVKTbask6H%2B%2FQr%2BoOkmgod%2FB1aHj0bSAAsSOB37aX9%2BvQF7B6C4HlDc8kpYCiYG4mxY0gI9p4SmkW2nN1CSHJdiIWA%2BP%2FGQwXU5HnkhbKuZK3paDRYdfyuDamxGvh4YnbXbQOV6IFgqfZYnuti8JZX6k6sy4DpUGALVdKTqAzkTA0HU7tpeyy4q9%2Byrq0KPpkKWjh%2F8AsbbXdd4B4%2F%2FSkpp98oNdDVjR4UtongdYgudAHgoq%2FhdetlojYBg%3D%3D',
            'carpeta' => 'Empleados/1688511323.png',
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
            'image' => 'https://storage.googleapis.com/smart-trucks-41e25.appspot.com/Empleados/1688511324.png?GoogleAccessId=firebase-adminsdk-r5qsx%40smart-trucks-41e25.iam.gserviceaccount.com&Expires=1689379200&Signature=r8uJg%2FLDWODHSl%2FYUCnBezFgeWjbnPPqn%2FB8oCNdPnqGhVv0AoRN7SoWatXXLG9D5%2B0ZCMNUFOdB2CjLXkCCkDdOmAh7jneSAD4qxZui445QDltPX113tjRD8pp66X1abo0aFjRYXJJuckmUMG70Zu99wxxHp8nRASR80yD4G3%2FjKK5brg%2FBqQb3eZvyMD85%2BxuC6%2BqON0DRRXpUxB3XwE%2FYQk9DjwF2NjeS9gUobiLojwYgELWjm5Ofspe61jSew9w%2F7068M9HlAL9t8CDjXAfxWzIzb1bSH2r0CgzgzO3zk2cALPTwWg0mRNCciczZYLiUr5iH3%2FRE30yzstA%2Blw%3D%3D',
            'carpeta' => 'Empleados/1688511324.png',
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
            'image' => 'https://storage.googleapis.com/smart-trucks-41e25.appspot.com/Empleados/1688511325.png?GoogleAccessId=firebase-adminsdk-r5qsx%40smart-trucks-41e25.iam.gserviceaccount.com&Expires=1689379200&Signature=NPc4ZGmXTc%2B%2B78uAMXnXiDoJdXcX7WHOry98WSQZfOGfCOk6o%2BU4bab1KJGAi7jUaQOmw0uPISDpE0gL1z%2BZPh%2BJOl3t97HeVp542Y%2FdFuWb85tusOGV33H5IdGtBLHjOsKQKpJMOuknRXHk8H%2FZUlQjIYnacan2MBmY6gmaUkTpV2hCCmRTeiZmlZjBeMk3v3c59DcQxhKUsPIvmTEw5qF7o5BT4ODRJEl%2BN4C0joWSj3VhffwP0w1e0yQbPZtcPRO%2BeWO69OZoiTdGmzaZ2xsUvoKUFPt3pSmS0J%2BNh26HAy9671KVh%2BybQzDPZxFCWceOzh7UwW4wJ7si2ynSzw%3D%3D',
            'carpeta' => 'Empleados/1688511325.png',
        ])->assignRole('Ayudante');
    }
}
