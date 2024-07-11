<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register(): void
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
//        $response->assertRedirect(route('dashboard', absolute: false));
    }

    public function test_new_users_can_register_by_tg(): void
    {
        $response = $this->post('/register-custom', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'tg_id' => '1'
        ]);

        $this->assertAuthenticated();
    }
}
