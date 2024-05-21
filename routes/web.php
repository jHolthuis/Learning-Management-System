<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\Pagecontroller;
use App\http\Controllers\LessonController;
use App\Http\Controllers\SubjectController;
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

// page controller

Route::get('/',[PageController::class, 'home']);
Route::get('edit_user',[PageController::class, 'create_user']);
Route::get('schedule', [PageController::class, 'schedule'])->name('schedule');
Route::get('make_changes', [PageController::class, 'make_changes'])->name('make_changes');
Route::get('edit_schedule', [PageController::class, 'edit_schedule'])->name('edit_schedule');

// account controller

Route::get('/',[Accountcontroller::class, 'name']);
Route::get('new_user', [AccountController::class, 'showRoles'])->name('new_user');
Route::get('account_info/{reqUser?}', [AccountController::class, 'show'])->name('account_info');
Route::get('/edit_profile', [AccountController::class, 'index'])->name('edit_profile.index');

Route::put('/edit_profile', [AccountController::class, 'edit'])->name('edit_profile.edit');

Route::post('store',[AccountController::class,'store'])->name('store_user');

// login controller

Route::get('login',[LoginController::class,'showloginForm'])->name('login')->middleware('guest');
Route::get('logout',[LoginController::class, 'logout'])->name('logout');

Route::post('login',[LoginController::class,'login'])->middleware('guest');

// lesson controller

Route::get('show_schedule', [LessonController::class, "show"])->name('show_schedule');

Route::post('change_schedule',[LessonController::class, 'store'])->name('store_schedule');

// subject controller

Route::get('/edit_schedule',[SubjectController::class, 'show_subjects'])->name('show_subjects');

// classroom controller

Route::get('/edit_schedule/classroom',[ClassroomController::class, 'show_classrooms'])->name('show_classrooms');



