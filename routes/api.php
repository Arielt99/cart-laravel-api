<?php

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('products', 'ProductController@index');

Route::get('cart', 'CartController@index');
Route::post('cart', 'CartController@store');

Route::delete('cart', 'CartController@destroy');
Route::delete('cart/{product_id}', 'CartController@delete');
