<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Medical;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Medical::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_id' => Client::all()->random()->id,
            'peso' => $this->faker->numberBetween(40,150),
            'talla' => $this->faker->randomNumber(2),
            'imc' => $this->faker->randomNumber(3),
            'diagnutricion' => $this->faker->randomElement(['SOBREPES', 'OBESIDAD', 'NORMOPESO', 'OBESIDAD TIPO II', 'OBESIDAD TIPO III', 'OBESIDAD MORBIDA']),
            'fechaexmedico' => $this->faker->date('Y-m-d'),
            'levantamientoobs' => $this->faker->date('Y-m-d'),
            'centromedico' => $this->faker->word,
            'aptitud' => $this->faker->randomElement(['MEDICAMENTE APTO', 'MEDICAMENTE NO APTO', 'OBSERVADO', 'APTO CON RESTRICCION', 'APTO CON RECOMENDACION', 'SIN APTITUD'])

        ];
    }
}
