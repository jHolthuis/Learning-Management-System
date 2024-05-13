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
Route::get('/',[Accountcontroller::class, 'name']);
Route::get('new_user', [AccountController::class, 'showRoles'])->name('new_user');
Route::get('edit_user',[PageController::class, 'create_user']);
Route::get('edit_profile',[AccountController::class, 'edit'])->name('edit_profile');
Route::get('login',[LoginController::class,'showloginForm'])->name('login')->middleware('guest');
Route::get('account_info/{reqUser?}', [AccountController::class, 'show'])->name('account_info');

Route::post('store',[AccountController::class,'store'])->name('store_user');
Route::post('login',[LoginController::class,'login'])->middleware('guest');
Route::get('logout',[LoginController::class, 'logout'])->name("logout");
