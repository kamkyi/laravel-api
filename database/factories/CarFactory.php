<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'make' => $this->faker->randomElement(['Toyota', 'Honda', 'Ford', 'Chevrolet']),
            'model' => $this->faker->word,
            'year' => $this->faker->year,
            'price' => $this->faker->randomFloat(2, 1000, 50000),
            'description' => $this->faker->sentence,
            'is_featured' => $this->faker->boolean(20), // 20% chance of being featured
            'manufacture_date' => $this->faker->date,
        ];
    }
}
