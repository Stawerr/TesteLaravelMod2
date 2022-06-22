<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');

});

Route::get('/projects','ProjectController@index');
Route::get('/projects/create','ProjectController@create');
Route::post('/projects/','ProjectController@store');
Route::get('/projects/{project}/edit','ProjectController@edit');
Route::put('/projects/{project}', 'ProjectController@update');
Route::delete('/projects/{project}', 'ProjectController@destroy');
Route::get('/projects/{project}','ProjectController@show');

Route::get('/categories','CategoryController@index');
Route::get('/categories/create','CategoryController@create');
Route::post('/categories/','CategoryController@store');
Route::get('/categories/{category}/edit','CategoryController@edit');
Route::put('/categories/{category}', 'CategoryController@update');
Route::delete('/categories/{category}', 'CategoryController@destroy');
Route::get('/categories/{category}','CategoryController@show');

Route::get('/products','ProductController@index');
Route::get('/products/create','ProductController@create');
Route::post('/products/','ProductController@store');
Route::get('/products/{product}/edit','ProductController@edit');
Route::put('/products/{product}', 'ProductController@update');
Route::delete('/products/{product}', 'ProductController@destroy');
Route::get('/products/{product}','ProductController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
