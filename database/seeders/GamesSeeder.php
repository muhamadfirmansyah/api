<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::create([
            'genre' => 'Arcade game',
            'image_url' =>
                'https://static.wikia.nocookie.net/capcomdatabase/images/d/dc/Knights.png',
            'singlePlayer' => true,
            'multiPlayer' => true,
            'name' => 'Knights of the Round',
            'platform' => 'Super Nintendo Entertainment System, Arcade video game, Android',
            'release' => 1991,
        ]);
    }
}
