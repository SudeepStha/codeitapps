<?php

use App\Http\Controllers\Admin\EnrollmentController;
use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CertificateController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\EnrollController;
use App\Http\Controllers\Api\SlideController;
use App\Http\Controllers\Api\StudentRegisterController;
use App\Http\Controllers\Api\TrendingCourseController;
use App\Http\Controllers\Api\UpcomingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('categories',CategoryController::class);
Route::resource('courses',CourseController::class);
Route::resource('upcoming',UpcomingController::class);

Route::resource('enroll',EnrollController::class);
Route::resource('studentregister',StudentRegisterController::class);
Route::resource('trendingcourse',TrendingCourseController::class);
Route::resource('enrollment',EnrollmentController::class);
Route::resource('slide',SlideController::class);
Route::resource('blog',BlogController::class);

Route::get('/certificate/{certificateNo}',[CertificateController::class,'show']);
Route::get('syllabus/{id}',[CategoryController::class,'syllabus']);
