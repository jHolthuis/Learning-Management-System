<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    // to the home page
    public function home() {
        return view('pages.welcome');
    }

    public function availability() {
        return view('pages.availability_input');
    }

    // to the make changes page
    public function make_changes() {
        return view('pages.make_changes');
    }
}
