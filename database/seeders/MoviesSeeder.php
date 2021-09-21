<?php

namespace Database\Seeders;

use App\Models\Movie;
use Faker\Factory;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();


        for ($i = 0; $i < 50; $i++) {
            Movie::create([
                'description' => $faker->paragraph(),
                'duration' => $faker->numberBetween(0, 360),
                'genre' => $faker->word(),
                'image_url' => $faker->imageUrl(),
                'rating' => $faker->numberBetween(0, 5),
                'review' => $faker->paragraph(5),
                'title' => $faker->sentence(),
                'year' => $faker->numberBetween(2000, 2021),
            ]);
        }
    }
}
