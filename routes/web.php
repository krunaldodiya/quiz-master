<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/terms', 'HomeController@terms')->name('terms');
Route::get('/test', 'TestController@test')->name('test')->middleware("auth");

Route::get('/questions', 'QuestionController@index')->name('list-questions')->middleware("auth");

Route::get('/exams', 'ExamController@index')->name('list-exams')->middleware("auth");
Route::get('/exams/add', 'ExamController@add')->name('add-exams')->middleware("auth");
Route::post('/exams/add', 'ExamController@store')->name('store-exams')->middleware("auth");
Route::post('/exams/fetch', 'ExamController@fetch')->name('fetch-exams')->middleware("auth");