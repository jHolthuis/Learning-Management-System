<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserListTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {

        $admin = User::factory()->create();

        $response = $this->actingAs($admin)
                    ->withSession(['banned' => false])
                    ->get('/');

        $response;
    }
}
