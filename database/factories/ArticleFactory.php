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

    //  \App\Models\Article::factory(5)->create();
    //  \App\Models\Article::factory(5)->create(['title' => 'Override the title']);
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'title' => fake()->sentence(),
            'excerpt' => fake()->sentence(),
            'body' => fake()->paragraph,
       ];
    }
}
