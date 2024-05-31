<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\NewUserCreated;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserCreatedController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $user = User::findOrFail($request->user_id);
 
        // send the mail
 
        Mail::to($request->user())->send(new NewUserCreated($user))->afterCommit();
 
        return redirect('/');
    }
}

