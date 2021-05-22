<?php

namespace Database\Factories;

use App\Models\Collaborator;
use App\Models\Departament;
use App\Models\District;
use App\Models\Province;
use App\Models\Ubigee;
use Illuminate\Database\Eloquent\Factories\Factory;

class CollaboratorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Collaborator::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'departament_id' => Departament::all()->random()->id,
            'province_id' => Province::all()->random()->id,
            'district_id' => District::all()->random()->id,
            'ubigee_id' => Ubigee::all()->random()->id,
            'nombres' => $this->faker->firstName,
            'apellidos' => $this->faker->lastName,
            'documento' => $this->faker->randomElement(['DNI', 'PASAPORTE', 'CARNET DE EXTRANJERIA']),
            'ndocumento' => $this->faker->unique()->randomNumber(8),
            'fechanac' => $this->faker->date('Y-m-d'),
            'instruccion' => $this->faker->word,
            'telefono' => $this->faker->phoneNumber,
            'direccion' => $this->faker->address,
            'correo' =>  $this->faker->unique()->safeEmail,
            'sexo' => $this->faker->randomElement(['M', 'F']),
            'estadocivil' => $this->faker->randomElement(['CASADO', 'SOLTERO', 'DIVORCIADO', 'CONVIVIENTE', 'VIUDO']),
            'sanguineo'  => $this->faker->randomElement(['O+', 'O-', 'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-']),
            'hijos' => $this->faker->randomDigit(),
            'contacto' => $this->faker->name,
            'telemeergencia' => $this->faker->phoneNumber,
            'tiempocasa' => $this->faker->randomNumber(2),
            'banco' => $this->faker->randomElement(['BBVA', 'BCP', 'INTERBANK']),
            'cuentabancaria' => $this->faker->bankAccountNumber,
        ];
    }
}
