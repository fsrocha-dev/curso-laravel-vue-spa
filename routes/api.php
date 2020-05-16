<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/taks', 'TaskController');
Route::get('/category/{category}/tasks', 'CategoryController@tasks');
Route::resource('/category', 'CategoryController');
