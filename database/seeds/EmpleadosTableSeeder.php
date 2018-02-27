<?php

use Illuminate\Database\Seeder;

class EmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            'nombre' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'puesto' => 'puesto '.str_random(10),
            'domicilio' => 'Calle falsa '.str_random(3).' Av siempre viva',
            'latitud'   => '19.3665903',
            'longitud'  => '-99.1810675',
            'fecha_nacimiento'=> date("Y-m-d H:i:s",mt_rand(1262055681,1262055681))
        ]);
    }
}
