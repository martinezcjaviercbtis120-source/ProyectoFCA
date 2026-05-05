<?php

namespace Database\Factories;

use App\Models\OfertaEducativa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends Factory<OfertaEducativa>
 */
class OfertaEducativaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = OfertaEducativa::class;
    public function definition(): array
    {
        return [
            'licenciatura' => $this->faker->word(),
            'descripcion' => $this->faker->sentence(),
        ];
    }
}
