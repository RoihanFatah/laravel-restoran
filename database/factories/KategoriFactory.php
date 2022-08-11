<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KategoriFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @var string
     */

    // protected $model = Kategori::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kategori' => $this->faker->name(),
        ];
    }
}
