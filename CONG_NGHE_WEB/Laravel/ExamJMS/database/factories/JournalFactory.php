<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JournalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2, true),
            'editor'=> $this->faker->name,
            'issn' => $this->faker->numerify('####-####'),
            'publicationDate' =>$this->faker->date('Y-m-d'),
        ];
    }
}
