<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class PsuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $capacity = ['ATX', 'SFX'];
        $type = ['Gold', 'Platinum', 'Bronze'];
        $wattage = ['500', '550', '650', '750'];
        $modular = ['Plně', 'Semi', 'Není'];
        $name = $this->faker->sentence(2);
        $name = str_replace('.', '', $name);

        return [
            'name' => $name,
            'brand_id' => $this->faker->numberBetween(1, 10),
            'formFactor' => $this->faker->randomElement($capacity),
            'efficiencyRating' => $this->faker->randomElement($type),
            'wattage' => $this->faker->randomElement($wattage),
            'modular' => $this->faker->randomElement($modular),
            'rating' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->numberBetween(1500, 4000),
            'info' => $this->faker->sentence(80),
            'illustration_image_id' => 9,
        ];
    }
}
