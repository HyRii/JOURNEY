<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Journal>
 */
class JournalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->image(),
            'place'=> $this->faker->city(),
            'country'=> $this->faker->country(),
            'date'=> $this->faker->date($format='Y-m-d', $max='now'),
            'experience' => $this->faker->text()
        ];
    }
}
