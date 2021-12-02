<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Registroempresa;


class RegistroempresaFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name, 
            'representante' => $this->faker->name, 
            'ciudad' => $this->faker->randomElement(['Calkini', 'Escarcega', 'Campeche', 'Tenabo', 'Hecelchakan']), 
            'estado' => $this->faker->randomElement(['Campeche', 'Yucatan', 'Tabasco']),
            'carrera' => $this->faker->randomElement(['Ingenieria en Sistemas Computacionales', 'Ingenieria Informatica', 'Ingenieria Bioquimica']),
            'estatus' => $this->faker->randomElement(['Inactivo', 'Activo'])
            
            
        ];
    }
}
