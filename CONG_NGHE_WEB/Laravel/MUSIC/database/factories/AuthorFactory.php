<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_name' =>$this->faker->name,
            'author_img'=> $this->faker->imageUrl(100,100,'author', true)
        ];
    }
}
