<?php

use Illuminate\Support\Facades\Route;
use App\Tuition;
use App\User;
use App\RequestTuitor;

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
Route::get('/', function () {
    return view('front.pages.index');
})->name('home');

Route::get('/find-tuitor', function () {
    return view('front.pages.find_tuitor');
})->name('reqTui');


Route::get('job', function () {
    $jobs = Tuition::all();
    return view('front.pages.tuition_job')->withJobs($jobs);
});

Route::middleware(['admin'])->group(function () {
    Route::resource('tuition', 'TuitionController');
});

Route::get('all_tuition','TuitionController@getTuitions')->name('all_tuition')->middleware('admin');

Route::resource('request','RequestTuitorController');

Route::get('/job/details/{id}', function ($id) {
    $details = Tuition::find($id);
    return view('front.pages.details')->withDetails($details);
});

Route::get('requestTuitions', function () {

    $requestTuitions = RequestTuitor::all();
    return view('backend.pages.request_tuitors')->withRequestTui($requestTuitions);
});

Route::get('our-tuitors',function(){
    $tuitorList = DB::table('users')
                ->where('role_id', '=', 2)
                ->get();
    return view('front.pages.tuitor_list')->withtuitorList($tuitorList);
})->name('tuitor_list');

Route::get('teacher/details/{id}',function($id){
    $tuitorDetails = DB::table('users')
                ->where('id', '=', $id)
                ->first();
    return view('front.pages.tuitorDetails')->withTuitorDetails($tuitorDetails);
})->name('about_tuitor');

Route::get('contact',function(){
    return view('front.pages.contact');
})->name('contact');

