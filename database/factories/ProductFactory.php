<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'producto' => $this -> faker ->company(),
            'capvolumetrica' => $this -> faker -> randomNumber(),
            'numempaques' => $this -> faker -> randomNumber(),
            'preciounitario' => $this -> faker -> randomNumber(),
            'imagen'=> $this -> faker -> randomLetter(),
            'category_id' => $this -> faker -> randomElement([1,2,3,4])
            
        ];
    }
}
