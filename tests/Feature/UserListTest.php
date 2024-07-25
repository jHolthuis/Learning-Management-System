<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserListTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $all_users = User::with('roles')->get();

        foreach ($all_users as $user) {
        echo $user->roles->name;
        }

        // $response = $this->get('user_list');

        // $response->assertStatus(200);
    }
}
