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
//            "tên cột" => $this->faker-> ...
            "title" => $this->faker->sentence(4, true),
            "body" => $this->faker->text,
//            "hinhAnh" => $this->faker->imageUrl(300,200),
        ];
    }
}
