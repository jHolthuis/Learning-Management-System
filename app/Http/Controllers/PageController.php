<?php

namespace App\Http\Controllers;

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
        return view('pages.account_info');
    }
}
