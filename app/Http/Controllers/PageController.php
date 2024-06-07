<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home() {
        return view('pages.welcome');
    }

    public function make_changes() {
        return view('pages.make_changes');
    }
}
