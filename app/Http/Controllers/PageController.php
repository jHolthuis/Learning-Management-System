<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home() {
        return view('pages.welcome');
    }
    public function showLoginForm() {
        return view('auth.login');
    }
    public function  register(){
        return view('auth.register');
    }
    public function create_user() {
        return view('pages.new_user');
    }
    public function account_info() {
        
        $user = Auth::user();
        if($user == null) {
            return view('auth.login')
                ->with('error', 'You must be logged in to view this page');
        } else {
        return view('pages.account_info');
        }
    }
}
