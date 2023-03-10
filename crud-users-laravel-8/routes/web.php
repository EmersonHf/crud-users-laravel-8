<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\UserController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[RegistrationController::class,'register']);
Route::get('/login',[LoginController::class,'login'])->middleware('alreadyLoggedIn');
Route::post('/register-user',[RegisterUserController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[LoginController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[UserController::class,'dashboard'])->middleware('isLoggedIn');
Route::resource('users', UserController::class)->middleware('isLoggedIn');
Route::get('/logout',[LoginController::class,'logout']);

