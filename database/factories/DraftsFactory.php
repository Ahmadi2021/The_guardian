<?php

namespace Database\Factories;

use App\Models\Drafts;
use Illuminate\Database\Eloquent\Factories\Factory;

class DraftsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Drafts::class;
    public function definition()
    {
        return [
            'title'=>$this->faker->name,
            'description'=>$this->faker->text,
            'type'=>$this->faker->name,
            'file'=>$this->faker->imageUrl,
            'creator_type'=>$this->faker->name,
            'creator_id'=>rand(1,5),


        ];
    }
}
