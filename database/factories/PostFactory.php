<?php

namespace Database\Factories;

use App\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id'=>Post::factory(),
            'title'=>$this->faker->text(),
            'content'=>$this->faker->text()

        ];
    }
}
