<?php

// database/factories/CourseFactory.php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'course_name' => $this->faker->word,
            'course_code' => $this->faker->unique()->bothify('??###'),
            'credit' => $this->faker->numberBetween(1, 4),
            'semester' => $this->faker->randomElement(['1st', '2nd', 'Summer']),
        ];
    }
}

