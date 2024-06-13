<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Games>
 */
class GamesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'title'=> $title = $this->faker->sentence(),
            'slug'=> Str::slug($title),
            'price'=> $this->faker->sentence(),
            'descrip' => $this->faker->text(3000),
        ];
        
    }
}
