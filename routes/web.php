<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SmartPhoneController;
use App\Http\Controllers\LandlinePhoneController;
use App\Http\Controllers\FeaturePhoneController;
use App\Http\Controllers\ContactPageController;
use App\Notifications\JobPostedNotification;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

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

//Phones-Contact
Route::get('/contact',[ContactPageController::class, 'index'] );

Route::get('/phones',[PhoneController::class, 'index']);

Route::get('/phones/smartphone',[SmartPhoneController::class, 'index'])->name('smartphone.index');
Route::get('/phones/landlinephone',[LandlinePhoneController::class, 'index'])->name('landlinephone.index');
Route::get('/phones/featurephone',[FeaturePhoneController::class, 'index'])->name('featurephone.index');

Route::get('/phones/smartphone/{smartphone}', [SmartPhoneController::class, 'show'])->name(('smartphone.show'));
Route::get('/phones/landlinephone/{landlinephone}', [LandlinePhoneController::class, 'show'])->name(('landlinephone.show'));
Route::get('/phones/featurephone/{featurephone}', [FeaturePhoneController::class, 'show'])->name('featurephone.show');

Route::patch('/phones/smartphone/{smartphone}', [SmartPhoneController::class, 'buy'])->name(('smartphone.buy'))
           ->middleware('auth');
Route::patch('/phones/landlinephone/{landlinephone}', [LandlinePhoneController::class, 'buy'])->name(('landlinephone.buy'))
           ->middleware('auth');
Route::patch('/phones/featurephone/{featurephone}', [FeaturePhoneController::class, 'buy'])->name('featurephone.buy')
           ->middleware('auth');

Route::get('/contact/smartphone/{user}', [ContactPageController::class, 'smartphone'])->name('my-smartphone');
Route::get('/contact/featurephone/{user}', [ContactPageController::class, 'featurephone'])->name('my-featurephone');
Route::get('/contact/landlinephone/{user}', [ContactPageController::class, 'landlinephone'])->name('my-landlinephone');