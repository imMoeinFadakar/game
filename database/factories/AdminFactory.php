<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => "fadakarmoein39@gmail.com",
            'age' => 22,
            "Address" => "somewhere",
            "type" => "admin",
            'password' =>  bcrypt("moeinfadakar") // password
        ];
    }
}
