<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "ID" => $this->faker->id,
            "АТЫ" => $this->faker->name,
            "ПОШТА" => $this->faker->post,
            "ТЕЛЕФОН" => $this->faker->phone,
            "АУДАН" => $this->faker->region,
            "МЕКТЕП" => $this->faker->school,
            "СЫНЫП" => $this->faker->class,
        ];
    }
}
