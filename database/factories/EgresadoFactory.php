<?php

namespace Database\Factories;

use App\Models\Egresado;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends Factory<Egresado>
 */
class EgresadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Egresado::class;
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->name(),
            'apellido'=>$this->faker->lastName(),
            'email'=>$this->faker->unique()->safeEmail(),
            'telefono'=>$this->faker->phoneNumber(),
            'carrera'=>$this->faker->word(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
