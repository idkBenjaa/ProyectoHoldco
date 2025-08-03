<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoMaquinaSeeder extends Seeder
{


    //Esta funcion ingresa estos datos que son los minimos para correr la aplicacion
    public function run(): void
    {
        DB::table('estado_maquina')->insert([

            ['estado' => 'PREPARADA'],
            ['estado' => 'OCUPADA'],
            ['estado' => 'INACTIVA'],

        ]);
    }
}
