<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname'=>$this->faker->firstName(),
            'lastname'=>$this->faker->lastName(),
            'email'=> $this->faker->unique()->safeEmail(),
            'phone'=>$this->faker->phoneNumber(),
            'message'=>$this->faker->streetAddress().', '.$this->faker->city(),
        ];
    }
}
