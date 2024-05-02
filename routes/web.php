<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ImageController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/login', [LoginController::class, 'show'])->name('loginPage');
Route::get('/registration', [RegistrationController::class, 'show'])->name('registrationPage');
Route::post('/signUp', [RegistrationController::class, 'signUp'])->name('signUp');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/property', [PropertyController::class, 'create'])->name('property.create');
Route::post('/store', [PropertyController::class, 'store'])->name('property.store');
Route::get('/show', [PropertyController::class, 'show'])->name('property.show');
Route::post('/upload', [ImageController::class, 'upload'])->name('uploadImage');
