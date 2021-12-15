<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Alumnosporcarreras;

class AlumnosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'matricula' => $this->faker->randomElement(['5850', '5846', '6323', '5643', '6754']),
            'nombre' => $this->faker->name, 
            'carrera' => $this->faker->randomElement(['Ingenieria Bioquimica','Ingenieria en Industrias Alimentarias', 'Ingenieria en Materiales', 'Ingenieria en Sistemas Computacionales', 'Ingenieria Indstrial', 'Ingenieria Mecatronica', 'Licenciatura en Administracion', 'Ingenieria Informatica', 'Ingenieria en Innovacion Agricola']), 
            'semestre' => $this->faker->randomElement(['9no',]),
            'creditos' => $this->faker->randomElement(['249','250']),
            'opciones' => $this->faker->randomElement(['Asignar', 'No asignar'])
            
            
        ];
    }
}
