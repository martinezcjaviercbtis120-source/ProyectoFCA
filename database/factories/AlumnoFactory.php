<?php

namespace Database\Factories;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends Factory<Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Alumno::class;
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->name(),
            'apellido'=>$this->faker->lastName(),
            'email'=>$this->faker->unique()->safeEmail(),
            'telefono'=>$this->faker->phoneNumber(),
            'created_at' => now(),
            'updated_at' => now(),
            //
        ];
    }
}
