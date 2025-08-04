<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;
use App\Models\Maquina;

class MaquinaSeeder extends Seeder
{
   
    public function run(): void
    {
        // Crea 7 máquinas con datos generados por el factory
        Maquina::factory()->count(7)->create();
    }
}
