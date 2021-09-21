<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'genre' => $this->faker->word(),
            'image_url' => $this->faker->imageUrl(),
            'singlePlayer' => $this->faker->boolean(),
            'multiPlayer' => $this->faker->boolean(),
            'name' => $this->faker->sentence(3),
            'platform' => $this->faker->sentence(),
            'release' => $this->faker->numberBetween(2001, 2021),
        ];
    }
}
