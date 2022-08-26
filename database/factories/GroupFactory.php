<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->bothify("???-22"),
            'title' => $this->faker->jobTitle,
            'body' => $this->faker->realText(500),
            'course_id' => $this->faker->numberBetween(1, 8),
            'instructor_id' => $this->faker->numberBetween(1, 10),
            'startdate' => $this->faker->date(),
            'enddate' => $this->faker->date(),
            'status' => 1,
            'duration' => $this->faker->numberBetween(2, 3),
        ];
    }
}
