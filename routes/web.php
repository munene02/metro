<?php

Route::get('/', 'ContentController@homePage');

Route::get('/aboutUs', 'ContentController@aboutUsPage');
Route::get('/services', 'ContentController@servicesPage');
Route::get('/projects', 'ContentController@projectsPage');
Route::get('/journal', 'ContentController@journalPage');
Route::get('/contact', 'ContentController@contactPage');
Route::get('/journal/{id}', 'ContentController@journalEntry');
Route::get('/project/{id}', 'ContentController@projectEntry');

Route::get('/image', 'ContentController@image');
Route::post('/imageAdd', 'AdminController@imageAdd');

Route::get('/login', function () { 
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('newSliders', 'AdminController@newSlider');

Route::get('/about', 'AdminController@about');
Route::post('/saveAbout', 'AdminController@saveAbout');
Route::post('/newAboutImage', 'AdminController@newAboutImage');
Route::get('/removeAboutImage/{id}', 'AdminController@removeAboutImage');

Route::get('/service', 'AdminController@service');
Route::post('/save1', 'AdminController@save1');
Route::post('/new1Image', 'AdminController@new1Image');
Route::get('/remove1Image/{id}', 'AdminController@remove1Image');

Route::post('/save2', 'AdminController@save2');
Route::post('/new2Image', 'AdminController@new2Image');
Route::get('/remove2Image/{id}', 'AdminController@remove2Image');

Route::post('/save3', 'AdminController@save3');
Route::post('/new3Image', 'AdminController@new3Image');
Route::get('/remove3Image/{id}', 'AdminController@remove3Image');

