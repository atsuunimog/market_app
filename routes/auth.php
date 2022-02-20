<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

//School registeration 
Route::get('/school-register', [RegisteredUserController::class, 'createSchool'])
                ->middleware('guest')
                ->name('school-register');                  

Route::post('/school-register', [RegisteredUserController::class, 'storeSchool'])
                ->middleware('guest');

//Affiliate registeration 
Route::get('/affiliate-register', [RegisteredUserController::class, 'createAffiliate'])
                ->middleware('guest')
                ->name('affiliate-register');

Route::post('/affiliate-register', [RegisteredUserController::class, 'storeAffiliate'])
                ->middleware('guest');

//Admin registeration
Route::get('/admin-register', [RegisteredUserController::class, 'createAdmin'])
                ->middleware('guest')
                ->name('admin-register');

Route::post('/admin-register', [RegisteredUserController::class, 'storeAdmin'])
                ->middleware('guest');


//School Login
Route::get('/school-login', [AuthenticatedSessionController::class, 'createSchoolUser'])
                ->middleware('guest')
                ->name('school-login');

Route::post('/school-login', [AuthenticatedSessionController::class, 'storeSchoolUser'])
                ->middleware('guest');

// Affiliate Login
Route::get('/affiliate-login', [AuthenticatedSessionController::class, 'createAffiliateUser'])
->middleware('guest')
->name('affiliate-login');

Route::post('/affiliate-login', [AuthenticatedSessionController::class, 'storeAffiliateUser'])
->middleware('guest');

//admin login
Route::get('/admin-login', [AuthenticatedSessionController::class, 'create_user_admin'])
                ->middleware('guest')
                ->name('admin-login');

Route::post('/admin-login', [AuthenticatedSessionController::class, 'store_user_admin'])
                ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware('guest')
                ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->middleware('auth')
                ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth')
                ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');
