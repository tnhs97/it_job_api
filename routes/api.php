<?php

use App\Post;
use App\User;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */
// Authentication for user
Route::group([
    'middleware' => ['api','cors'],
    'prefix' => 'user',
], function ($router) {

    Route::post('register', 'UserAuthController@register');
    Route::post('login', 'UserAuthController@login');
    Route::post('logout', 'UserAuthController@logout');
    Route::post('refresh', 'UserAuthController@refresh');
    Route::post('me', 'UserAuthController@me');
    Route::put('me', 'UserController@me');

});

// Authentication for employer
Route::group([
    'middleware' => ['api','cors'],
    'prefix' => 'employer',
], function ($router) {

    Route::post('register', 'EmployerAuthController@register');
    Route::post('login', 'EmployerAuthController@login');
    Route::post('logout', 'EmployerAuthController@logout');
    Route::post('refresh', 'EmployerAuthController@refresh');
    Route::post('me', 'EmployerAuthController@me');
    Route::put('me', 'EmployerController@me');


});

//Post Filter
Route::get('post/filter', 'PostFilterController@filter');