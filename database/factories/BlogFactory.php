<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Blog::class;

    
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'description' => fake()->paragraph(),
            'category' => 'laravel',
            'created_at' => fake()->date(),
            
        ];
    }
}
