<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Setting;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('sheep', 'SheepController@index');
Route::get('sheep/{id}', 'SheepController@index_from_paddock');

Route::post('sheep', 'SheepController@store');
Route::post('sheep/{id}', 'SheepController@store_in_paddock');
Route::post('/sheep/kill/{id}', 'SheepController@kill_sheep');
Route::post('/sheep/move/{sid}/{pid}', 'SheepController@move_sheep');

Route::delete('sheep/{id}', 'SheepController@delete');

Route::get('today', 'DayController@index');


