<?php

Route::get('/', 'ContentController@homePage');
Route::get('/aboutUs', 'ContentController@aboutUsPage');
Route::get('/services', 'ContentController@servicesPage');
Route::get('/projects', 'ContentController@projectsPage');
Route::get('/journals', 'ContentController@journalPage');
Route::get('/contacts', 'ContentController@contactPage');
Route::get('/journal/{id}', 'ContentController@journalEntry');
Route::get('/projects/{id}', 'ContentController@projectEntry');

Route::get('/image', 'ContentController@image');
Route::post('/imageAdd', 'AdminController@imageAdd');

Route::get('/login', function () { 
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('admin');
Route::post('newSliders', 'AdminController@newSlider')->middleware('admin');
Route::post('/saveSlider', 'AdminController@saveSlider')->middleware('admin');
Route::get('/removeSlider/{id}', 'AdminController@removeSlider')->middleware('admin');

Route::get('/about', 'AdminController@about')->middleware('admin');
Route::post('/saveAbout', 'AdminController@saveAbout')->middleware('admin');
Route::post('/newAboutImage', 'AdminController@newAboutImage')->middleware('admin');
Route::get('/removeAboutImage/{id}', 'AdminController@removeAboutImage')->middleware('admin');

Route::get('/service', 'AdminController@service')->middleware('admin');
Route::post('/save1', 'AdminController@save1')->middleware('admin');
Route::post('/new1Image', 'AdminController@new1Image')->middleware('admin');
Route::get('/remove1Image/{id}', 'AdminController@remove1Image')->middleware('admin');

Route::post('/save2', 'AdminController@save2')->middleware('admin');
Route::post('/new2Image', 'AdminController@new2Image')->middleware('admin');
Route::get('/remove2Image/{id}', 'AdminController@remove2Image')->middleware('admin');

Route::post('/save3', 'AdminController@save3')->middleware('admin');
Route::post('/new3Image', 'AdminController@new3Image')->middleware('admin');
Route::get('/remove3Image/{id}', 'AdminController@remove3Image')->middleware('admin');

Route::get('/project', 'AdminController@project')->middleware('admin'); 
Route::get('/newProject', function () { return view('newProject');})->middleware('admin');
Route::get('/editProject/{id}', 'AdminController@editProject')->middleware('admin'); 
Route::get('/addPhoto/{id}', 'AdminController@addPhoto')->middleware('admin'); 
Route::get('/changeCover/{id}', 'AdminController@changeCover')->middleware('admin');
Route::get('/removePhoto/{id}', 'AdminController@removePhoto')->middleware('admin'); 
Route::get('/removeProject/{id}', 'AdminController@removeProject')->middleware('admin'); 

Route::post('/addProject', 'AdminController@addProject')->middleware('admin'); 
Route::post('/saveProject', 'AdminController@saveProject')->middleware('admin'); 
Route::post('/savePhoto', 'AdminController@savePhoto')->middleware('admin'); 
Route::post('/saveCover', 'AdminController@saveCover')->middleware('admin');

Route::get('/journal', 'AdminController@journal')->middleware('admin'); 
Route::get('/newJournal', function () { return view('newJournal');})->middleware('admin'); 
Route::get('/editJournal/{id}', 'AdminController@editJournal')->middleware('admin'); 
Route::get('/changeCoverJ/{id}', 'AdminController@changeCoverJ')->middleware('admin');
Route::get('/removeJournal/{id}', 'AdminController@removeJournal')->middleware('admin');  

Route::post('/addJournal', 'AdminController@addJournal')->middleware('admin');  
Route::post('/saveJournal', 'AdminController@saveJournal')->middleware('admin');
Route::post('/saveCoverJ', 'AdminController@saveCoverJ')->middleware('admin');

Route::get('/contact', 'AdminController@contact')->middleware('admin');
Route::post('/saveContact', 'AdminController@saveContact')->middleware('admin');



