<?php

namespace Database\Factories;

use App\Models\Amount;
use App\Models\Area;
use App\Models\Category;
use App\Models\Collaborator;
use App\Models\DatoGeneral;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatoGeneralFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DatoGeneral::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::all()->random()->id,
            'amount_id' => Amount::all()->random()->id,
            'area_id' => Area::all()->random()->id,
            'position_id' => Position::all()->random()->id,
            'respirador' => $this->faker->randomElement(['SI', 'NO']),
            'zapatos' => $this->faker->randomElement(['SI', 'NO']),
            'tallazapato' => $this->faker->randomNumber(2),
            'tallapantalon' => $this->faker->randomElement(['S', 'M', 'L', 'XL']),
            'tallacamisa' =>$this->faker->randomElement(['S', 'M', 'L', 'XL']),
            'inicioinduccion' => $this->faker->date('Y-m-d'),
            'fininduccion' => $this->faker->date('Y-m-d'),
            'lugarinduccion' => $this->faker->word,
            'especialidad' => $this->faker->word,
            'medio' => $this->faker->word,
            'observaciones' => $this->faker->sentence,
            'comentarios' => $this->faker->sentence,
        ];
    }
}
