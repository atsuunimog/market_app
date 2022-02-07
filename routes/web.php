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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
