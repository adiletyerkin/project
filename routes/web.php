<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/about', function () {
    return view('about');
});

Route::get('/delivery', function () {
    return view('delivery');
});


Route::get('/contact', function () {
    return view('contact');
});




Route::get('/listofusers', 'RegistrationController@allData' )->name('listofusers');


Route::get('/edituser/{id}', 'RegistrationController@edituser' )->name('edituser');

Route::post('/update/{id}', 'RegistrationController@update' )->name('update');

Route::get('/delete/{id}','RegistrationController@delete' )->name('delete');

Route::get('/change-password','Auth\ChangePasswordController@index')->name('password.change');
Route::post('/change-password','Auth\ChangePasswordController@store')->name('change.password');
