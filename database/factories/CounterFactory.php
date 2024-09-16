<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CounterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'key' => 'invoice',
            'prefix' => 'Inv-',
            'value' => 20000
        ];
    }
}
