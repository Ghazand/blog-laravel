<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            // App\Models\Comment::factory()->create() it will create
            // user and post associated with it
            'post_id'=>Post::factory(),
            'user_id'=>User::factory(),
            'body'=>$this->faker->paragraph
        ];
    }
}
