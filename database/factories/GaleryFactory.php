<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GaleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'image' => $this->faker->imageUrl(640, 480, 'books', true),
            'judul' => $this->faker->sentence(mt_rand(2, 5)),
            'deskripsi' => $this->faker->sentence(mt_rand(5, 10))
        ];
    }
}
