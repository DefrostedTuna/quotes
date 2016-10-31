<?php

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/quotes', [
    'as' => 'api.quotes',
    'uses' => 'Api\QuotesController@getIndex'
]);

Route::post('quotes', [
    'as' => 'api.quotes.store',
    'uses' => 'Api\QuotesController@postStore'
]);

Route::get('/quotes/{id}', [
    'as' => 'api.quotes.show',
    'uses' => 'Api\QuotesController@getShow'
]);

Route::patch('/quotes/{id}/edit', [
    'as' => 'api.quotes.update',
    'uses' => 'Api\QuotesController@postUpdate'
]);

Route::delete('/quotes/{id}', [
    'as' => 'api.quotes.destroy',
    'uses' => 'Api\QuotesController@postDestroy',
]);