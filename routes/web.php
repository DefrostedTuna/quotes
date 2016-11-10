<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');


Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@getIndex'
]);

Route::get('/quotes', [
    'as' => 'quotes.index',
    'uses' => 'QuotesController@getIndex'
]);

Route::post('/quotes', [
    'as' => 'quotes.store',
    'uses' => 'QuotesController@postStore'
]);

Route::get('/quotes/create', [
    'as' => 'quotes.create',
    'uses' => 'QuotesController@getCreate'
]);

Route::get('/quotes/{id}', [
    'as' => 'quotes.show',
    'uses' => 'QuotesController@getShow'
]);

Route::patch('/quotes/{id}/edit', [
    'as' => 'quotes.edit',
    'uses' => 'QuotesController@postUpdate'
]);

Route::delete('/quotes/{id}', [
    'as' => 'quotes.destroy',
    'uses' => 'QuotesController@postDestroy'
]);