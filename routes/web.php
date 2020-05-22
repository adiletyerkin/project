<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AuthorMiddleware;



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



// Route::get('/listofusers', 'HomeController@allData' )->name('listofusers');


Route::get('/edituser/{id}', 'HomeController@edituser' )->name('edituser');

Route::post('/update/{id}', 'HomeController@update' )->name('update');

Route::get('/delete/{id}','HomeController@delete' )->name('delete');




Route::get('/change-password','Auth\ChangePasswordController@index')->name('password.change');
Route::post('/change-password','Auth\ChangePasswordController@store')->name('change.password');



Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
    {
        Route::match(['get', 'post'], 'listofusers', 'HomeController@allData');
        
    });
Route::group(['middleware' => 'App\Http\Middleware\AuthorMiddleware'], function()
    {
        Route::resource('product', 'ProductController' );
        
    });


Route::get('/Kazakhstan', function () {
    return view('Country.Kazakhstan');
});

Route::get('/Switzerland', function () {
    return view('Country.Switzerland');
});
Route::get('/Japan', function () {
    return view('Country.Japan');
});
Route::get('/Italy', function () {
    return view('Country.Italy');
});
Route::get('/Germany', function () {
    return view('Country.Germany');
});


Route::redirect('/', '/home');


Route::get('/add-to-cart/{product}', 'CartController@add' )->name('cart.add')->middleware('auth');

Route::get('/cart', 'CartController@index' )->name('cart.index')->middleware('auth');
Route::get('/cart/destroy/{itemId}', 'CartController@destroy' )->name('cart.destroy')->middleware('auth');
Route::get('/cart/update/{itemId}', 'CartController@update' )->name('cart.update')->middleware('auth');