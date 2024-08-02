<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Course;
use App\Models\Feedback;
use App\Models\User;
use Tests\TestCase;

class OrdersTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_feedback(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->post('/feedback', ['type' => 'order', 'form_data' => ['first_name' => 'FirstName']]);
        $response->assertStatus(200);

        $this->assertCount(1, Feedback::all());
    }

    public function test_orders_store(): void
    {
        $user = User::factory()->create();
        $course = Course::factory()->create();

        $response = $this->post(route('orders.store'), [
            'user_id' => $user->id,
            'orderable_id' => $course->id,
            'orderable_type' => 'orders',
            'price' => '123',
        ]);
        $response->assertStatus(200);
    }
}
