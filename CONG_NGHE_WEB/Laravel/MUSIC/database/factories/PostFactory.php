<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2,true),
            'post_name' => $this->faker->sentence(3,true),
            'category_id' => $this->faker->numberBetween(1,10),
            'summary'=>$this->faker->paragraph(1,true),
            'content'=>$this->faker->paragraph(2,true),
            'author_id' => $this->faker->numberBetween(1,10),
            'img'=>$this->faker->imageUrl(200,200,'animals', true)
        ];
    }
}
