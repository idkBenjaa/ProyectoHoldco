<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    
    //Datos minimos necesarios para correr la app
    public function run(): void
    {
        DB::table('estado')->insert([

            ['estado' => 'PENDIENTE'],
            ['estado' => 'EN PROGRESO'],
            ['estado' => 'COMPLETADO'],

        ]);
    }
}
