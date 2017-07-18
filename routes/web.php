<?php

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
    return redirect()->route('home');
});

Auth::routes();


// Pages
Route::get('/home', 		'HomeController@home')				->name('home');
Route::get('/aboutus', 		'HomeController@aboutus')			->name('aboutus');
Route::get('/article', 		'HomeController@articles')			->name('articles');
Route::get('/event', 		'HomeController@events')			->name('events');
Route::get('/app', 			'HomeController@app')				->name('app');
Route::get('/mcalert', 		'HomeController@mcalert')			->name('mcalert');
Route::get('/see&act', 		'HomeController@seenact')			->name('seenact');

Route::get('/profile', 		'UserController@profile')			->name('profile');


// resources
Route::resource('appointment','AppointmentController');
Route::resource('session','SessionController');
Route::resource('mc','MedicalCertificateController');
Route::post('/send', 'EmailController@send');
