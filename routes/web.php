<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/login', [LoginController::class, 'show'])->name('loginPage');
Route::get('/registration', [RegistrationController::class, 'show'])->name('registrationPage');
Route::post('/signUp', [RegistrationController::class, 'signUp'])->name('signUp');
Route::post('/login', [LoginController::class, 'login'])->name('login');
