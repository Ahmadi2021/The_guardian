<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RevisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->title,
            'description'=>$this->faker->text,
            'status'=>$this->faker->randomElement(['pending', 'confirmed', 'processing', 'on-hold', 'completed', 'rejected']),
        ];
    }
}
