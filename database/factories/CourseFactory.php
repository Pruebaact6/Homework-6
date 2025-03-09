<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
use App\Models\Kit;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3), // Name of the course in 3 words 
            'content' => $this->faker->paragraph(5), // Description with 5 prhases
            'kit_id' => Kit::inRandomOrder()->first()->id ?? Kit::factory()->create()->id, // Asign an existent Kit or create a new one
        ];
    }
}
