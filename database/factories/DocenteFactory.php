<?php

namespace Database\Factories;

use App\Models\Docente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends Factory<Docente>
 */
class DocenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Docente::class;
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->name(),
            'apellido'=>$this->faker->lastName(),
            'email'=>$this->faker->unique()->safeEmail(),
            'telefono'=>$this->faker->phoneNumber(),
            'asignatura'=>$this->faker->word(),
            'area'=>$this->faker->word(),
            'created_at' => now(),
            'updated_at' => now(),
            //
        ];
    }
}
