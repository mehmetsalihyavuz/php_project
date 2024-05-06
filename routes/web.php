<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SmartPhoneController;
use App\Http\Controllers\LandlinePhoneController;
use App\Http\Controllers\FeaturePhoneController;


use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');


// Jobs
 Route::get('/jobs', [JobController::class, 'index']);
 Route::get('/jobs/create', [JobController::class, 'create']);
 Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
 Route::get('/jobs/{job}', [JobController::class, 'show']);

 Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
     ->middleware('auth')
     ->can('edit','job');

 Route::patch('/jobs/{job}', [JobController::class, 'update']);
 Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

// Auth
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);


Route::get('/users', [UserController::class, 'index'] );
Route::get('/users/{user}/edit', [UserController::class, 'edit'])
        ->middleware('auth')
        ->can('edituser','user');
        
Route::patch('/users/{user}', [UserController::class,'update']);
Route::delete('/users/{user}', [UserController::class,'destroy']);

// Phones
Route::get('/phones',[PhoneController::class, 'index']);

Route::get('/phones/smartphone',[SmartPhoneController::class, 'index'])->name('smartphone.index');
Route::get('/phones/landlinephone',[LandlinePhoneController::class, 'index'])->name('landlinephone.index');
Route::get('/phones/featurephone',[FeaturePhoneController::class, 'index'])->name('featurephone.index');

Route::get('/phones/smartphone/{smartphone}', [SmartPhoneController::class, 'show'])->name(('smartphone.show'));
Route::get('/phones/landlinephone/{landlinephone}', [LandlinePhoneController::class, 'show'])->name(('landlinephone.show'));
Route::get('/phones/featurephone/{featurephone}', [FeaturePhoneController::class, 'show'])->name('featurephone.show');

Route::post('/phones/smartphone/{smartphone}', [SmartPhoneController::class, 'buy'])->name(('smartphone.buy'));
Route::post('/phones/landlinephone/{landlinephone}', [LandlinePhoneController::class, 'buy'])->name(('landlinephone.buy'));
Route::post('/phones/featurephone/{featurephone}', [FeaturePhoneController::class, 'buy'])->name('featurephone.buy');