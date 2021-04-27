<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "full_name" => $this->faker->full_name,
            "place" => $this->faker->place,
            "person_desc" => $this->faker->person_desc,
            "person_photo" => $this->faker->person_photo,
        ];
    }
}
