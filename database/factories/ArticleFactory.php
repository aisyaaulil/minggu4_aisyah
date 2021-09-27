<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tittle = $this->faker->sentence;
        $author = $this->faker->sentence;
        return [
        'title' => $tittle,
        'content' => $this->faker->realText(),
        'image' => $this->faker->imageUrl(640, 480, 'animals',true),
        ];
    }
}