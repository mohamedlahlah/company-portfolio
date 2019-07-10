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
 
use App\Mail\SendMailable;
use Illuminate\Support\Facades\Mail;
 
Route::get('/send-mail', function () {
 
    Mail::to('aboo.shade333@gmail.com')->send(new SendMailable()); 
 
    return 'A message has been sent to Mailtrap!';
 
});
// Route::get('/send/email', 'phpmailerController@mail');
// Route::get('/s', function () {
//     return view('hh'); 
//     })->name('s');

// Route::post('/m', [
// 	'uses' => 'phpmailerController@sendEmail',
// 	'as'   => 'mail'
// ]);


Route::redirect('/', '/home');
Route::get('/home', function () {
    return view('layouts.main'); 
    })->name('home');



Route::get('/portfpilio', function () {
    return view('pages.portfolio'); 
    })->name('portfolio');


Route::get('/contact', function () {
    return view('pages.contact-us'); 
    })->name('contact');

Route::get('/about-us', function () {
    return view('pages.about-us'); 
    })->name('about-us');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
