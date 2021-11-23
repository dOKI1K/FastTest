<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;



class UserFactory extends Factory
{
    public function definition()
    {
        return [


            'name' => $this->faker->name(),
            'username' => $this->faker->unique()->userName(),
            'email'=> $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2tTtTEuT'
        ];
    }
}
