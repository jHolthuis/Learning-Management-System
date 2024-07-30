<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Role;

class UserListTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $role = Role::factory()->has(User::factory())->make();
        $admin = User::factory()->for($role)->make();

        $response = $this->actingAs($admin)
                    ->withSession(['banned' => false])
                    ->get('/');

        $response->assertStatus(200);
    }
}
