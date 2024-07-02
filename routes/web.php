<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AvailabilityController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LessonController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Middleware for logged in users only

Route::middleware(['auth'])->group(function () {

    // straight to view
    Route::view('/', 'pages.welcome')->name('home');
    Route::view('availability', 'pages.availability_input')->name('availability_input');
    Route::view('make_changes', 'pages.make_changes')->name('make_changes');

    // account controller

    Route::get('new_user', [AccountController::class, 'showRoles'])->name('new_user');
    Route::get('account_info/{reqUser?}', [AccountController::class, 'show'])->name('account_info');
    Route::get('edit_profile', [AccountController::class, 'edit_profile'])->name('edit_profile');
    
    Route::put('edit_profile', [AccountController::class, 'update'])->name('update_profile');
    
    Route::post('store',[AccountController::class,'store'])->name('store_user');

    // availability controller

    Route::post('availability', [AvailabilityController::class, 'store'])->name('availability_store');
    Route::get('availability_index', [AvailabilityController::class, 'index'])->name('availability_index');

    // lesson controller

    Route::get('schedule_edit', [LessonController::class, "schedule_input"])->name('schedule_input');
    Route::get('schedule', [LessonController::class, 'show_schedule'])->name('show_schedule');
    
    Route::post('new_schedule',[LessonController::class, 'store'])->name('store_schedule');
});

// login controller

Route::get('login',[LoginController::class,'showloginForm'])->name('login')->middleware('guest');
Route::get('logout',[LoginController::class, 'logout'])->name('logout');

Route::post('login',[LoginController::class,'login'])->middleware('guest');
