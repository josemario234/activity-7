<?php

namespace Database\Factories;

use App\Models\Courses;
use Illuminate\Database\Eloquent\Factories\Factory;


class CourseFactory extends Factory
{
    protected $model = Courses::class;

    public function definition(): array
    {
        return [
            'titleCourse' => $this->faker->sentence(),
            'descriptionCourse' => $this->faker->paragraph(),
        ];
    }
}
