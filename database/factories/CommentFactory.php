<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->safeEmail,
            'name' => $this->faker->firstName,
            'comment' => $this->faker->text,
            'article_id' => $this->faker->randomElement([1, 2, 3, 4, 5, 6]),
        ];
    }
}
