<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
Route::post('/login', 'UserController@login')->name('login');
Route::post('/register', 'UserController@register')->name('register');

Route::group(['middleware' => 'auth:api'], function () {
    Route::resource('/task', 'TaskController');
    Route::resource('/category', 'CategoryController');
    Route::get('/category/{category}/tasks', 'CategoryController@tasks');
});
