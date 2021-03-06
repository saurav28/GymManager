<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('blog.index');
})->name('blog.index');

//adding for contact form

Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');

Route::get('logout', 'Auth\LoginController@logout');
Route::resource('users','UsersController')->middleware('auth','check_user_role:ROLE_ADMIN');

Route::get('post/{id}', function () {
    return view('blog.post');
})->name('blog.post');

Route::get('plans', function () {
    return view('blog.plans');
})->name('blog.plans');

Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::group(['prefix' => 'admin'], function() {
    Route::get('', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::get('create', function () {
        return view('admin.create');
    })->name('admin.create');

    Route::post('create', function() {
        return "It works!";
    })->name('admin.create');

    Route::get('edit/{id}', function () {
        return view('admin.edit');
    })->name('admin.edit');

    Route::post('edit', function() {
        return "It works!";
    })->name('admin.update');

    
});
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
