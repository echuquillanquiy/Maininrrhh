<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => 'services/' .$this->faker->image('public/storage/services', 640, 400, null, false),
            'name' => $this->faker->sentence(),
            'descripcion' => $this->faker->paragraph(),
        ];
    }
}
