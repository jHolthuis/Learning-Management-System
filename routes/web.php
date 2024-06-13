<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Pagecontroller;
use App\http\Controllers\LessonController;
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


Route::middleware(['auth'])->group(function () {

    // page controller
    Route::get('/',[PageController::class, 'home'])->name('home');
    Route::get('make_changes', [PageController::class, 'make_changes'])->name('make_changes');

    // account controller

    Route::get('new_user', [AccountController::class, 'showRoles'])->name('new_user');
    Route::get('account_info/{reqUser?}', [AccountController::class, 'show'])->name('account_info');
    Route::get('edit_profile', [AccountController::class, 'edit_profile'])->name('edit_profile');
    
    Route::put('edit_profile', [AccountController::class, 'update'])->name('update_profile');

    Route::post('store',[AccountController::class,'store'])->name('store_user');


    // lesson controller

    Route::get('show_schedule', [LessonController::class, "show_schedule"])->name('show_schedule');
    Route::get('show_subject', [LessonController::class, "show_subject"])->name('show_subject');
    Route::get('update_schedule', [LessonController::class, 'edit_schedule'])->name('edit_schedule');

    Route::put('update_schedule', [LessonController::class, "update_schedule"])->name('update_schedule');
    
    Route::post('change_schedule',[LessonController::class, 'store'])->name('store_schedule');
});

// login controller

Route::get('login',[LoginController::class,'showloginForm'])->name('login')->middleware('guest');
Route::get('logout',[LoginController::class, 'logout'])->name('logout');

Route::post('login',[LoginController::class,'login'])->middleware('guest');
