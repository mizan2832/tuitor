<?php

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
Auth::routes();
Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin');
Route::get('/tuitor', 'HomeController@handleTuitor')->name('tuitor.route')->middleware('tuitor');

Route::get('/home', function () {
    return view('front.pages.index');
})->name('home');
Route::get('job', function () {
    return view('front.pages.tuition_job');
});
Route::middleware(['admin'])->group(function () {
    Route::get('/', function () {
        
    });
});





