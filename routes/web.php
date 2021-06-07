<?php

use Illuminate\Support\Facades\Route;
use App\Tuition;
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
Auth::routes();
// Route::get('login', 'AuthController@index');
// Route::post('post-login', 'AuthController@postLogin'); 
// Route::get('register', 'AuthController@register');
// Route::post('post-register', 'AuthController@postRegister'); 
// Route::get('dashboard', 'AuthController@dashboard'); 
// Route::get('logout', 'AuthController@logout');


Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin');
Route::get('/tuitor', 'HomeController@handleTuitor')->name('tuitor.route')->middleware('tuitor');

Route::get('/', function () {
    return view('front.pages.index');
})->name('home');
Route::get('job', function () {
    $jobs = Tuition::all();
    return view('front.pages.tuition_job')->withJobs($jobs);
});
Route::middleware(['admin'])->group(function () {
    Route::resource('tuition', 'TuitionController');
});

Route::get('all_tuition','TuitionController@getTuitions')->name('all_tuition')->middleware('admin');
Route::get('/job/details/{id}', function ($id) {
    dd($id);
    return view('front.pages.tuition_job')->withJobs($jobs);
});


