<?php

namespace Database\Factories;

use App\Models\Type;
use App\Models\User;
use App\Models\Work;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class WorkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Work::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $titulo = $this->faker->sentence();

        return [
            'user_id' => 1,
            'type_id' => Type::all()->random()->id,
            'titulo' => $this->faker->sentence(),
            'descripcion' => $this->faker->paragraph(),
            'slug' => Str::slug($titulo),
            'inicio' => Carbon::now(),
            'fin' => Carbon::now()->addDays(5),
            'estado' => $this->faker->randomElement([1, 2]),
            'image' => 'works/' .$this->faker->image('public/storage/works', 640, 400, null, false),
        ];
    }
}
