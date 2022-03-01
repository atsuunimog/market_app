<?php

use Illuminate\Support\Facades\Route;
// use App\Models\Scholarship;
// use App\Models\User;
// use App\Models\SchoolProfile;
use App\Http\Controllers\HandleScholarship;
use App\Http\Controllers\HandleDashboard;
use App\Http\Controllers\HandleSchoolProfile;
use App\Http\Controllers\HandleHomepage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HandleHomepage::class, "displayHomePage"]);

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

// Route::get('school-front', function () {
//     return view('school-front');
// });

Route::get('faq', function () {
    return view('faq');
});

Route::get('pricing', function () {
    return view('pricing');
});

Route::get('create-admission', function () {
    return view('create-admission');
});


//school public url 


//school private url 
Route::get('school-admission', function () {
    return view('school/school-admission');
})->middleware(["auth"]);

Route::get('private-scholarship/{username}',[HandleScholarship::class, "displaySchoolPrivateScholarship"])->middleware(["auth"]);

Route::get('school-achievements', function () {
    return view('school/school-achievements');
})->middleware(["auth"]);

Route::get('school-blog', function () {
    return view('school/school-blog');
})->middleware(["auth"]);

Route::get('school-help', function () {
    return view('school/school-help');
})->middleware(["auth"]);

Route::get('school-profile', [HandleSchoolProfile::class, "createProfile"])->middleware(["auth"]);

Route::post('school-profile', [HandleSchoolProfile::class, "updateProfile"])
->middleware(["auth"]);

Route::get('school-events', function () {
    return view('school/school-events');
})->middleware(["auth"]);

Route::get('school-wallet', function () {
    return view('school/school-wallet');
})->middleware(["auth"]);

Route::get('school-front/{username}', [HandleSchoolProfile::class, "displaySchoolLandingPage"]);

Route::get('edit-school-scholarship/{id}', [HandleScholarship::class, "editScholarship"])
->middleware(["auth"])->name('edit-school-scholarship');

Route::get('delete-school-scholarship/{id}', [HandleScholarship::class, "deleteScholarship"])
->middleware(["auth"])->name('delete-school-scholarship');

Route::get('school-all-scholarship', [HandleScholarship::class, "getAllScholarship"])
->middleware(["auth"]);

Route::get('school-scholarship', [HandleScholarship::class, "countAllScholarship"])
->middleware(["auth"]);

//school post
Route::post('school-scholarship', [HandleScholarship::class, "storeScholarship"])
->middleware(["auth"]);


//affiliate public url


//affiliate private url


//admin public url 


//admin private url 


Route::get('school-achievement', function () {
    return view('school-achievement');
});

// Route::get('school-dashboard', function () {
//     return view('school/dashboard');
// })->middleware(['auth'])->name('school-dashboard');

// Route::get('affiliate-dashboard', function () {
//     return view('affiliate/dashboard');
// })->middleware(['auth:affiliate'])->name('affiliate-dashboard');

Route::get('dashboard', [HandleDashboard::class, "displayDashboard"])->middleware(['auth'])->name('dashboard');

// Route::get('school/dashboard', function () {
//     return view('school/dashboard');
// })->middleware(['auth'])->name('school/dashboard');

// Route::get('affiliate/dashboard', function () {
//     return view('affiliate/dashboard');
// })->middleware(['auth'])->name('affiliate/dashboard');

require __DIR__.'/auth.php';
