<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $url = "www.google.com";
        return [
            'userId' => fake()->randomDigit(),
            'approvalStatus' => fake()->title,
            'categoryID' => fake()->randomDigit(),
            'title' => fake()->title,
            'content' => $url
        ];
        
    }
}
