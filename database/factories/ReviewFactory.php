<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\User;
use \App\Models\Review;
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'userID' => User::all()->random()->id,
            'writerID' => User::all()->random()->id,
            'text' => $this->faker->text(100),
        ];
    }
}
