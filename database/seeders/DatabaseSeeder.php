<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    //ejecuta los seeders
    public function run(): void
    {
        $this->call([
            EstadoSeeder::class,
            EstadoMaquinaSeeder::class,
            MaquinaSeeder::class,
        ]);
    }
}
