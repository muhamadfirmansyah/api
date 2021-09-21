<?php

namespace Tests\Feature;

use App\Models\Movie;
use App\Models\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

class MovieTest extends TestCase
{

    public function test_index()
    {
        $response = $this->get("/api/data-movie");
        $response->assertStatus(200)
            ->assertJsonStructure(
                [
                    "*" =>
                    [
                        'id',
                        'description',
                        'duration',
                        'genre',
                        'image_url',
                        'rating',
                        'review',
                        'title',
                        'year',
                    ]
                ]
            );
    }

    public function test_store()
    {
        $user = User::factory()->create();

        $payload = [
            "email" => $user->email,
            "password" => "password"
        ];

        $token = $this->post("/api/login", $payload)['token'];

        $headers = [
            "Authorization" => "Bearer $token"
        ];

        $payload = [
            'description' => 'lorem',
            'duration' => 120,
            'genre' => 'lorem',
            'image_url' => 'lorem',
            'rating' => 3,
            'review' => 'lorem',
            'title' => 'lorem',
            'year' => 2021,
        ];

        $response = $this->post('/api/data-movie/', $payload, $headers);
        $response->assertStatus(201)->assertJson($payload);

        Movie::find($response['id'])->delete();
    }

    public function test_update()
    {
        $user = User::factory()->create();

        $payload = [
            "email" => $user->email,
            "password" => "password"
        ];

        $token = $this->post("/api/login", $payload)['token'];

        $headers = [
            "Authorization" => "Bearer $token"
        ];

        $movie = Movie::factory()->create();

        $payload = [
            'description' => 'lorem',
            'duration' => 120,
            'genre' => 'lorem',
            'image_url' => 'lorem',
            'rating' => 3,
            'review' => 'lorem',
            'title' => 'lorem',
            'year' => 2021,
        ];

        $response = $this->put("/api/data-movie/$movie->id", $payload, $headers);
        $response->assertStatus(200)
            ->assertJson($payload);

        $movie->delete();
    }

    public function test_destroy()
    {
        $user = User::factory()->create();

        $payload = [
            "email" => $user->email,
            "password" => "password"
        ];

        $token = $this->post("/api/login", $payload)['token'];

        $headers = [
            "Authorization" => "Bearer $token"
        ];

        $movie = Movie::factory()->create();

        $response = $this->delete("/api/data-movie/$movie->id", [], $headers);
        $response->assertStatus(204);

    }
}
