<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProductController;
use App\Models\Queries;
use App\Models\Teacher;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|----------------------------------
----------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/index');
});

Route::get('/index', function () {
    return view('/index');
});

// Route::get('/students','App\Http\Controllers\TestController@test');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/after_sign_in', function () {
    return view('/after_sign_in');
});

Route::get('/students', [App\Http\Controllers\StudentController::class, 'index']);


Route::resource('products', ProductController::class);

Route::get('/teachers', function () {
    return view('/teachers');
});
///-----------------------------------------------------------------------------
/// for querie table email sending////
Route::get('/sendemail', 'App\Http\Controllers\SendEmailController@index');
Route::post('/sendemail/send', 'App\Http\Controllers\SendEmailController@send');

Route::get('/sendemail', function(){
    DB::table('querie')->insert([
      'name' => 'Marco',
      'email' => 'marco@reus.com',
      'message' => 'test',
    ]);
 });
////////---------------------------------------------------
 Route::get('/sendemail', function(){
    DB::table('exam')->insert([
      'name' => 'Marco',
      'email' => 'marco@reus.com',
      'phone' => '8777',
    ]);
 });
/// for Exam table email sending///
 Route::get('/sendemail', 'App\Http\Controllers\ExamController@index');
Route::post('/sendemail/send', 'App\Http\Controllers\ExamController@send');

//----------------------------------------------

Route::get('/teachers', [App\Http\Controllers\TeacherController::class, 'index']);
