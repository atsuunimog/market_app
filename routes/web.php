<?php

use Illuminate\Support\Facades\Route;
// use App\Models\Scholarship;
// use App\Models\User;
// use App\Models\SchoolProfile;
use App\Http\Controllers\HandleEvents;
use App\Http\Controllers\HandleScholarship;
use App\Http\Controllers\HandleDashboard;
use App\Http\Controllers\HandleSchoolProfile;
use App\Http\Controllers\HandleAffiliateProfile;
use App\Http\Controllers\HandleHomepage;
use App\Http\Controllers\HandleBlog;

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

Route::get('blog',[HandleBlog::class, "displayAllSchoolBlogs"]);

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

Route::get('blog-content/{id}', [HandleBlog::class, "showBlogDetails"]);

Route::post('blog-content/{id}', [HandleBlog::class, "handleBlogComments"]);

Route::get('faq', function () {
    return view('faq');
});

Route::get('pricing', function () {
    return view('pricing');
});

Route::get('create-admission', function () {
    return view('create-admission');
});

Route::get("school-all-nominations", [HandleScholarship::class, "showAllSchoolNominations"]);

Route::get('nominate-candidate/{post_id}/{affiliate_id}', [HandleScholarship::class, "AffiliateNomination"]);

Route::post('nominate-candidate/{post_id}/{affiliate_id}', [HandleScholarship::class, "StoreAffiliateNomination"]);

Route::get('affiliate-profile', [HandleAffiliateProfile::class, "displayAffiliateProfile"])->middleware(["auth"]);

Route::post('affiliate-profile', [HandleAffiliateProfile::class, "updateProfile"])->middleware(["auth"]);

Route::get('affiliate-nominations', [HandleScholarship::class, "displayAffiliateNominations"] )->middleware(["auth"]);

//school private url 
Route::get('school-admission', function () {
    return view('school/school-admission');
})->middleware(["auth"]);

Route::post('submit-blog-post', [HandleBlog::class, 'storeBlog'])
->middleware(["auth"]);

Route::get('private-scholarships/{username}',[HandleScholarship::class, "displaySchoolPrivateScholarship"])->middleware(["auth"]);

Route::get('single-scholarship/{id}',[HandleScholarship::class, "displaySingleScholarship"]);

Route::post('single-scholarship/{id}',[HandleScholarship::class, "submitNomination"]);

Route::get('scholarships',[HandleScholarship::class, "displayAllSchoolScholarship"]);

Route::get('school-all-blog', [HandleBlog::class, "displayAllBlogs"]);

Route::get('school-achievements', function () {
    return view('school/school-achievements');
})->middleware(["auth"]);

Route::get('school-blog', [HandleBlog::class, "displaySchoolBlogPage"])->middleware(["auth"]);

Route::get('school-help', function () {
    return view('school/school-help');
})->middleware(["auth"]);

Route::get('school-profile', [HandleSchoolProfile::class, "createProfile"])->middleware(["auth"]);

Route::post('school-profile', [HandleSchoolProfile::class, "updateProfile"])
->middleware(["auth"]);

Route::get('edit-school-event/{id}', [HandleEvents::class, "editEvent"])
->middleware(["auth"]);

Route::get('delete-school-event/{id}', [HandleEvents::class, "deleteEvent"])
->middleware(["auth"]);

Route::get('school-events', function () {
    return view('school/school-events');
})->middleware(["auth"]);

Route::post('school-events', [HandleEvents::class, 'createEvent'])->middleware(["auth"]);

Route::get('school-all-events', [HandleEvents::class, 'displayAllEvents'])->middleware(["auth"]);

Route::get('school-wallet', function () {
    return view('school/school-wallet');
})->middleware(["auth"]);

Route::get('school-front/{username}', [HandleSchoolProfile::class, "displaySchoolLandingPage"]);

Route::get('edit-school-blog/{id}', [HandleBlog::class, "editBlog"])
->middleware(["auth"])->name('edit-school-blog');

Route::get('delete-school-blog/{id}', [HandleBlog::class, "deleteBlog"])
->middleware(["auth"])->name('delete-school-blog');

Route::get('edit-school-scholarship/{id}', [HandleScholarship::class, "editScholarship"])
->middleware(["auth"])->name('edit-school-scholarship');

Route::get('delete-school-scholarship/{id}', [HandleScholarship::class, "deleteScholarship"])
->middleware(["auth"])->name('delete-school-scholarship');

Route::get('school-all-scholarship', [HandleScholarship::class, "getAllScholarship"])
->middleware(["auth"]);

Route::get('school-scholarship', [HandleScholarship::class, "countAllScholarship"])
->middleware(["auth"]);

Route::post('school-scholarship', [HandleScholarship::class, "storeScholarship"])
->middleware(["auth"]);

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
