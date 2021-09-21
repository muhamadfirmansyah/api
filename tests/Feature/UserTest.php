<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{

    public function test_register()
    {
        $payload = [
            "name" => "John Due",
            "email" => "johndue@example.com",
            "password" => "password"
        ];

        $response = $this->post("/api/register", $payload);
        $response->assertStatus(201)
            ->assertJsonStructure(
                [
                    "success",
                    "message",
                    "data"
                ]
            );

        User::find($response['data']['id'])->delete();
    }

    public function test_login()
    {
        $user = User::factory()->create();

        $payload = [
            "email" => $user->email,
            "password" => "password"
        ];

        $response = $this->post("/api/login", $payload);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'token',
                'success'
            ]);

        $user->delete();
    }

    public function test_logout()
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

        $response = $this->get("/api/logout", $headers);
        $response->assertStatus(200)
            ->assertJsonStructure([
                'success',
                'message'
            ]);

        $user->delete();
    }
}
