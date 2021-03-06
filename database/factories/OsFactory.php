<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class OsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $modeList = ['32-bit', '64-bit'];
        $versionList = ['10', '11'];
        $editionList = ['Home', 'Pro'];

        $mode = $this->faker->randomElement($modeList);
        $version = $this->faker->randomElement($versionList);
        $edition = $this->faker->randomElement($editionList);
        $name = $this->faker->sentence(2);
        $name = str_replace('.', '', $name);


        if ($mode == "32-bit") {
            $maximumMemory = '4';
        } else if ($edition == 'Home') {
            $maximumMemory = '128';
        } else {
            $maximumMemory = '2048';
        }


        return [
            'name' => $name,
            'brand_id' => $this->faker->numberBetween(1, 10),
            'version' => $version,
            'edition' => $edition,
            'mode' => $mode,
            'maximumMemory' => $maximumMemory,
            'rating' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->numberBetween(1500, 4000),
            'info' => $this->faker->sentence(80),
            'illustration_image_id' => 10,
        ];
    }
}
