<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'fname'=> fake()->firstname(),
                'lname'=> fake()->lastname(),
                'email'=> fake()->unique()->safeemail(),
                'phone'=> fake()->phonenumber(),
                'address'=> fake()->address(),
                'city'=> fake()->city(),
                'province'=> fake()->state(),
                'zip'=> fake()->postcode(),
                'birthdate'=> fake()->dateTimeBetween('2000-01', '2010-12-30')->format('Y-m-d')
            ];
        }
            //
    }

