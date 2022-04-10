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
            //
            'image' => $this->faker->name(),
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'content' => $this->faker->paragraph(mt_rand(5, 10))(),
        ];
    }
}
