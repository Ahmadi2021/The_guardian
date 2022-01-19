<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WriterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'phone'=>$this->faker->phoneNumber,
            'bank_name'=>$this->faker->name,
            'account_number'=>$this->faker->creditCardNumber,
        ];
    }
}
