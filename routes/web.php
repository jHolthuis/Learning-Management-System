<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\Auth\LoginController;
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
Route::get('new_user',[PageController::class, 'create_user']);
Route::get('/login',[PageController::class,'login'])->name('login');

Route::post('/new_user',[AccountController::class,'store'])->name('add-account');
Route::post('/login',[LoginController::class,'login']);
