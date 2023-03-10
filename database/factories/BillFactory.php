<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'buser' => $this->faker->numberBetween(1, 1),
            'bdate' => $this->faker->date(),
            'bfrompincode' => $this->faker->numberBetween(100000, 999999),
            'bfromplace' => $this->faker->city(),
            'btopincode' => $this->faker->numberBetween(100000, 999999),
            'btoplace' => $this->faker->city(),
            'bmode' => $this->faker->randomElement(['bike', 'bus']),
            'bkm' => $this->faker->numberBetween(10, 1000),
            'bda' => $this->faker->numberBetween(0, 500),
            'bamount' => $this->faker->numberBetween(50, 5000),
            'bcid' => null,
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
