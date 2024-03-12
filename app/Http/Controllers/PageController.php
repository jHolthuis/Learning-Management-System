<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('pages.welcome');
    }
    public function login() {
        return view('auth.login');
    }
    public function  register(){
        return view('auth.register');
    }
    public function create_user() {
        return view('pages.new_user');
    }
}