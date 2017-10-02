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

Route::get('/', 'ContentController@homePage');

Route::get('/aboutUs', 'ContentController@aboutUsPage');
Route::get('/services', 'ContentController@servicesPage');
Route::get('/projects', 'ContentController@projectsPage');
Route::get('/journal', 'ContentController@journalPage');
Route::get('/contact', 'ContentController@contactPage');

Route::get('/image', 'ContentController@image');
Route::post('imageAdd', 'AdminController@imageAdd');

Route::get('/login', function () { 
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('newSliders', 'AdminController@newSlider');
