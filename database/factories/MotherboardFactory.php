<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class MotherboardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = ['ATX', 'MicroATX', 'Mini'];
        $maximumMemory = ['64', '128'];
        $memorySlots = ['2', '4'];
        $color = ['Černá', 'Bílá'];
        $name = $this->faker->sentence(2);
        $name = str_replace('.', '', $name);
        $supported_ram_type = [1, 2];


        return [
            'name' => $name,
            'brand_id' => $this->faker->numberBetween(1, 10),
            'wifi' => $this->faker->boolean(),
            'socket_id' => $this->faker->numberBetween(1, 4),
            'type' => $this->faker->randomElement($type),
            'maximumMemory' => $this->faker->randomElement($maximumMemory),
            'memorySlots' => $this->faker->randomElement($memorySlots),
            'color' => $this->faker->randomElement($color),
            'rating' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->numberBetween(1500, 4000),
            'info' => $this->faker->sentence(80),
            'illustration_image_id' => 4,
            'supported_ram_type_id' => $this->faker->randomElement($supported_ram_type)
        ];
    }
}
