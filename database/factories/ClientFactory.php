<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this -> faker -> name(),
            'apPaterno' => $this -> faker -> lastName(),
            'apMaterno' => $this -> faker -> lastName(),
            'telefono' => $this -> faker -> phoneNumber(10),
            'email' => fake()->unique()->safeEmail(),
            'direccion' => fake()->unique()->address(),
            'password' => $this-> faker -> password(),
        ];
    }
}
