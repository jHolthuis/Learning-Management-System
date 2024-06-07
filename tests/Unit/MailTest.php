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
    public function test_if_mail_works(): void
    {
        Mail::fake();

        $this->post(route('store_user'), [
            'name' => 'Glenn Glerum',
            'email' => 'gglerum@gmail.com',
            'password' => 'test',
            'phone_number' => '1234567890',
            'date_of_birth' => '1987-01-01',
            'hometown' => 'Reduzum',
            'start_date' =>  '2024-05-01',
            'role_id' => '1',
            'loan_laptop' => '1',
        ])->assertSessionHasNoErrors();

        Mail::assertSent(NewUserCreated::class, function (NewUserCreated $mail) {
            return $mail->hasTo('gglerum@gmail.com') &&
                $mail->hasFrom('info@hacklab.frl') &&
                $mail->hasSubject('New User Created');
        });
    }
}
