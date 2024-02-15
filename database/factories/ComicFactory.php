<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ComicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake() -> words(3, true),
            'description'=> fake() ->  paragraph,
            'author'=> fake() -> name,
            'price'=> fake() -> randomFloat(2, 5, 100),
        ];
    }
}
