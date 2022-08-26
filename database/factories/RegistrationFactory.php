<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => Student::factory()->state(['user_id' => User::factory()]),
            'group_id' => $this->faker->numberBetween(1, 10),
            'package' => $this->faker->numberBetween(5000, 15000),

        ];
    }
}
