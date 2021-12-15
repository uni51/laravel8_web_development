<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PublisherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker =\Faker\Factory::create('ja_JP');

        return [
            'name' => $faker->company . '出版',
            'address' => $faker->address,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
