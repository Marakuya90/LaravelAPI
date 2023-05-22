<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name,
            'company' => $this->faker->company,
            'telephone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'DOB' => $this->faker->date,
            'foto' => $this->faker->imageUrl
        ];
    }
}
