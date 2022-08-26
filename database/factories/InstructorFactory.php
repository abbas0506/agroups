<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstructorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()->state(['role_id' => 4]),
            'gender' => $this->faker->numberBetween(0, 1),
            'specialization' => $this->faker->paragraph(2),
            'experience' => $this->faker->paragraph(2),
            // 'birthdate' => $this->faker->dateTimeInInterval('-30 years', '+10 years'),
            // 'cnic' => $this->faker->bothify("#####-#######-#"),
            'address' => $this->faker->address,
        ];
    }
}
