<?php

namespace Database\Factories;

use App\Models\Collaborator;
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
            'user_id' => auth()->user()->id,
            'documento' => $this->faker->randomElement(['DNI', 'PASAPORTE', 'CARNET DE EXTRANJERIA']),
            'ndocumento' => $this->faker->unique()->randomNumber(8),
            'nombres' => $this->faker->firstName,
            'apellidos' => $this->faker->lastName,
            'fechanac' => $this->faker->date('Y-m-d'),
            'instruccion' => $this->faker->word,
            'telefono' => $this->faker->phoneNumber,
            'direccion' => $this->faker->address,
            'correo' =>  $this->faker->unique()->safeEmail,
            'sexo' => $this->faker->randomElement(['MASCULINO', 'FEMENINO']),
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
