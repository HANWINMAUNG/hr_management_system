<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->unique()->phoneNumber(),
            'employee_id' => $this->faker->numberBetween(1,20),
            'nrc_number' => $this->faker->numberBetween(400,900),
            'birthday' => now(),
            'gender' => $this->faker->randomElement(['Male','Female']),
            'address' => $this->faker->address(),
            'department_id' => $this->faker->numberBetween(1,20),
            'date_of_join' => now(),
            'is_present' => $this->faker->randomElement(['1','0']),
            'department_id' => $this->faker->numberBetween(1,20),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
