<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Maquina>
 */
class MaquinaFactory extends Factory
{

    //Funcion para randomizar
    public function definition(): array
    {
        return [

            //Esta linea randomiza el nombre de la maquina
            //Toma el string maquina y agrega un caracter aleatorio de la A a la G
            'nombre' => 'Maquina ' . chr(65 + $this->faker->unique()->numberBetween(0, 6)),

            //Este randomiza el coeficiente entre 1.00 a 3.00
            'coeficiente' => $this->faker->randomFloat(2, 1.00, 3.00),

            //Se define el estado de la maquina por defecto que es PREPARADA
            'id_estado_maquina' => 1

        ];
    }
}
