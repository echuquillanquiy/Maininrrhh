<?php

namespace Database\Factories;

use App\Models\Ubigee;
use Illuminate\Database\Eloquent\Factories\Factory;

class UbigeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ubigee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ubigeo_cod' => $this->faker->unique()->randomNumber(6),
            'distrito' => $this->faker->unique()->word,
            'provincia' => $this->faker->unique()->word,
            'departamento' => $this->faker->unique()->word,
        ];
    }
}
