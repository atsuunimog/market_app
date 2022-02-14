<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('scholarship', function () {
    return view('scholarship');
});

Route::get('help', function () {
    return view('help');
});

Route::get('blog-content', function () {
    return view('blog-content');
});

Route::get('school-front', function () {
    return view('school-front');
});

Route::get('faq', function () {
    return view('faq');
});

Route::get('pricing', function () {
    return view('pricing');
});

Route::get('create-admission', function () {
    return view('create-admission');
});

Route::get('school-achievement', function () {
    return view('school-achievement');
});

Route::get('dashboard', function () {
    if(Auth::user()->account_type == "sch_acct"):
        return view('school/dashboard');
    else:
        return view('affiliate/dashboard');
    endif;
})->middleware(['auth'])->name('dashboard');


Route::get('school/dashboard', function () {
    return view('school/dashboard');
})->middleware(['auth'])->name('school/dashboard');

Route::get('affiliate/dashboard', function () {
    return view('affiliate/dashboard');
})->middleware(['auth'])->name('affiliate/dashboard');

require __DIR__.'/auth.php';
