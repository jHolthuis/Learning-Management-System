<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Pagecontroller;
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

Route::get('/',[PageController::class, 'home']);
Route::get('/',[Accountcontroller::class, 'show']);
Route::get('new_user', [AccountController::class, 'showRoles']);
Route::get('edit_user',[PageController::class, 'create_user']);
Route::get('login',[LoginController::class,'showloginForm'])->name('login')->middleware('guest');

Route::post('store',[AccountController::class,'store'])->name('store_user');
Route::post('login',[LoginController::class,'login'])->middleware('guest');
Route::post('logout',[LoginController::class, 'logout'])->name("logout");
