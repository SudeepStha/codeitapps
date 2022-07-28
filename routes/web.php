<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\EnrollmentController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\StudentRegisterController;
use App\Http\Controllers\Admin\UpcomingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'admin'], function(){
    // Admin Control
Route::resource('categories',CategoryController::class);
Route::resource('courses',CourseController::class);
Route::resource('upcoming',UpcomingController::class);
Route::resource('enquiry', EnquiryController::class);
Route::resource('studentregister', StudentRegisterController::class);
Route::resource('certificate', CertificateController::class);
Route::resource('enrollment', EnrollmentController::class);
Route::resource('slide', SlideController::class);
Route::resource('blog', BlogController::class);

Route::get('syllabus/{id}',[CategoryController::class,'syllabus']);

Route::resource('accounts', AccountController::class);

});
