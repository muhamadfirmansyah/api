<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->paragraph(),
            'duration' => $this->faker->numberBetween(0, 360),
            'genre' => $this->faker->word(),
            'image_url' => $this->faker->imageUrl(),
            'rating' => $this->faker->numberBetween(0, 5),
            'review' => $this->faker->paragraph(5),
            'title' => $this->faker->sentence(),
            'year' => $this->faker->numberBetween(2000, 2021),
        ];
    }
}
