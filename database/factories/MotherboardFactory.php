<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $socket = ['AM4', 'LGA-1700', 'LGA-1200', 'LGA-1151'];
        $type = ['ATX', 'MicroATX', 'Mini'];
        $maximumMemory = ['64', '128'];
        $memorySlots = ['2', '4'];
        $color = ['Černá', 'Bílá'];
        // TODO: DODĚLAT FACTORY

        return [
            'name' => $this->faker->sentence(3),
            'wifi' => $this->faker->boolean(),
            'socket' => $this->faker->randomElement($socket),
            'type' => $this->faker->randomElement($type),
            'maximumMemory' => $this->faker->randomElement($maximumMemory),
            'memorySlots' => $this->faker->randomElement($memorySlots),
            'color' => $this->faker->randomElement($color),
            'rating' => $this->faker->numberBetween(1,5),
            'price' => $this->faker->numberBetween(1500, 4000),
        ];
    }
}