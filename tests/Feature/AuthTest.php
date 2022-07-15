<?php

namespace Tests\Feature;
use Tests\TestCase;
use App\Models\User;

class AuthTest extends TestCase
{
    public function testAuth()
    {
        $password = '123456';
        $user = User::factory()->create(['password' => bcrypt($password)]);

        $response = $this->post('login', ['email' => $user->email, 'password' => $password]);
        $response->assertStatus(200);

        $response = $this->get('roles');
        $response->assertStatus(200);

        $response = $this->get('logout');
        $response->assertStatus(200);

        $response = $this->get('roles');
        $response->assertStatus(301);
    }

    public function testAuthFaled()
    {
        $password = '123456';
        $user = User::factory()->create(['password' => bcrypt($password)]);

        $response = $this->post('login', ['email' => $user->email, 'password' => $password .'7']);
        $response->assertStatus(301);

        $response = $this->get('roles');
        $response->assertStatus(301);

    }

    public function testRoleAuth()
    {
        $password = '123456';
        $user = User::factory()->create(['password' => bcrypt($password)]);

        $response = $this->post('login', ['email' => $user->email, 'password' => $password .'7']);
        $response->assertStatus(301);

        $response = $this->post('roles');
        $response->assertStatus(301);

    }
}
