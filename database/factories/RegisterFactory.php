<?php

// database/factories/RegisterFactory.php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Register;

class RegisterFactory extends Factory
{
    protected $model = Register::class;

    public function definition()
    {
        return [
            'student_id' => \App\Models\Student::factory(),
            'course_id' => \App\Models\Course::factory(),
            'teacher_id' => \App\Models\Teacher::factory(),
            'registration_date' => $this->faker->date(),
        ];
    }
}

