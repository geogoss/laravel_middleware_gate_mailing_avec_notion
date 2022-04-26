<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = $this->faker;
        return [
            'titre' => $faker->realText($maxNbChars = 10),

            'contenu' => $faker->realText($maxNbChars = 1000),

            // 'user_id' => 1
        ];
    }
}
