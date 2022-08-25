<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'domicilio' => fake()->city(),
            'numero_exterior'=>fake()->buildingNumber(),
            'colonia'=>fake()->word(),
            'cp'=>fake()->numberBetween(20000,50000),
            'ciudad'=>fake()->city(),
            'user_id'=> User::inRandomOrder()->first()->id,
        ];
    }
}
