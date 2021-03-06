<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class PcCaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = ['ATX Mid Tower', 'MicroATX Mini Tower', 'Mini ITX Desktop'];
        $color = ['Černá', 'Bílá'];
        $name = $this->faker->sentence(2);
        $name = str_replace('.', '', $name);

        return [
            'name' => $name,
            'brand_id' => $this->faker->numberBetween(1, 10),
            'type' => $this->faker->randomElement($type),
            'color' => $this->faker->randomElement($color),
            'internal_5_25_bays' => $this->faker->numberBetween(0, 6),
            'external_5_25_bays' => $this->faker->numberBetween(0, 6),
            'rating' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->numberBetween(1500, 4000),
            'info' => $this->faker->sentence(80),
            'illustration_image_id' => 8,
        ];
    }
}
