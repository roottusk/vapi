<?php

use App\Http\Controllers\API1UsersController;
use App\Models\API1Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/* API 1 */

Route::get('api1/user/{id}','App\Http\Controllers\API1UsersController@show');

Route::post('api1/user','App\Http\Controllers\API1UsersController@store');

Route::put('api1/user/{id}','App\Http\Controllers\API1UsersController@update');



/* API 2 */

Route::post('api2/user/login','App\Http\Controllers\API2UsersController@login');

Route::get('api2/user/details','App\Http\Controllers\API2UsersController@show');


/* API 3 */

Route::post('api3/user','App\Http\Controllers\API3UsersController@store');

Route::post('api3/user/login','App\Http\Controllers\API3UsersController@login');

Route::get('api3/comment','App\Http\Controllers\API3CommentsController@show');

Route::post('api3/comment','App\Http\Controllers\API3CommentsController@store');

/* API 4 */

Route::post('api4/login','App\Http\Controllers\API4UsersController@login');

Route::post('api4/otp/verify','App\Http\Controllers\API4UsersController@verify');

Route::get('api4/user','App\Http\Controllers\API4UsersController@show');

/* API 5 */

Route::get('api5/user/{id}','App\Http\Controllers\API5UsersController@show');

Route::post('api5/user','App\Http\Controllers\API5UsersController@store');

Route::get('api5/users','App\Http\Controllers\API5UsersController@showall');


/* API 6 */

Route::post('api6/user','App\Http\Controllers\API6UsersController@store');

Route::get('api6/user/me','App\Http\Controllers\API6UsersController@show');

