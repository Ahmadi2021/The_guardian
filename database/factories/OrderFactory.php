<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
//        dateTimeBetween($startDate = '-5years', $endDate = 'now', $timezone = null)
        return [
            'order_id'=> $this->faker->unique->phoneNumber(),
            'title'=>$this->faker->title,
            'description'=>$this->faker->text,
            'budget'=>$this->faker->numberBetween($min =1000, $max=9000),
            'status'=>$this->faker->randomElement(['pending', 'confirmed', 'processing', 'on-hold', 'completed', 'rejected']),
            'is_assigned'=>$this->faker->boolean,
            'deadline'=>$this->faker->date,
            'payment_type'=>$this->faker->randomElement(['full', 'partial']),
            'payment_status'=>$this->faker->randomElement([ 'paid', 'partially_paid', 'unpaid']),
            'file'=>$this->faker->imageUrl,

        ];
    }
}
