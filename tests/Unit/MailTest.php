<?php

namespace Tests\Unit;

use App\Mail\NewUserCreated;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Mail;

class MailTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        Mail::fake();
        $user = User::factory()->make();
        $mailable = new NewUserCreated($user);

        Mail::to($user)->send($mailable);

        Mail::assertSent(NewUserCreated::class, function (NewUserCreated $mail) use ($user) {
            return $mail->hasTo($user->email) &&
                   $mail->hasFrom('info@hacklab.frl') &&
                   $mail->hasSubject('New User Created');
        });
    }
}
