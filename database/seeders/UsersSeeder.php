<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $password = Hash::make('password');

        User::create([
            "name" => "Administrator",
            "email" => "admin@admin.com",
            "password" => $password
        ]);

        for ($i = 0; $i < 10; $i++) {
            User::create([
                "name" => $faker->name(),
                "email" => $faker->email(),
                "password" => $password
            ]);
        }
    }
}
