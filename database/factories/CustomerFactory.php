<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
     protected  $model = Customer::class;

    public function definition()
    {
        return [
            "phone"=>$this->faker->phoneNumber,
            "bank_name"=>$this->faker->name(),
            "account_number"=>$this->faker->randomDigit(),
//          'user_id'=>User::factory(),
        ];

    }
}
