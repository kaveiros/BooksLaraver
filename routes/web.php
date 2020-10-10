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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    $about = "This will be the about page!";
    return view('pages.about')->with('about', $about);
});

Route::resource('/categories', 'CategoriesController');

Route::get('/categories-create', function() {
    return view('pages.create-category');
});

Route::get('/edit/{id}', 'CategoriesController@edit');

Route::get('/show/{id}', 'CategoriesController@show');

Route::post('/categories-create', 'CategoriesController@store');
