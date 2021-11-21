<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libro')->insert([
            'nombre'=> 'Estructura de Datos',
            'autor'=> 'Luis Joyanes'
        ]);

        DB::table('libro')->insert([
            'nombre'=> 'Programación Orientada a Objetos',
            'autor'=> 'Luis Joyanes'
        ]);

    }
}
