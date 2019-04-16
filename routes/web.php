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


Route::get('login', 'LogController@login');
Route::post('menu','LogController@loginPost');

Route::get('register/input', 'RegisterController@input');
Route::post('register/confirm', 'RegisterController@post');
Route::post('register/complete', 'RegisterController@confirm');

Route::get('menu', 'MenuController@menu');
Route::get('logout', 'MenuController@logout');
Route::get('newConstruction/select', 'NewConstructionController@select');
Route::post('newConstruction/input', 'NewConstructionController@input');
Route::post('newConstruction/confirm', 'NewConstructionController@confirm');
Route::post('newConstruction/complete', 'NewConstructionController@complete');

Route::get('construction/list', 'ConstructionController@list');
Route::post('construction/edit', 'ConstructionController@edit');
Route::post('construction/confirm', 'ConstructionController@confirm');
Route::post('construction/complete', 'ConstructionController@complete');
Route::post('construction/eraser', 'ConstructionController@eraser');
Route::post('construction/eraserComp', 'ConstructionController@eraserComp');

Route::get('search', 'SearchController@search');
Route::get('result', 'SearchController@result');