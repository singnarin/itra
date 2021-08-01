<?php

Route::get('/', 'index@index');
Route::get('index_2', 'index@index_2');
Route::get('loginForm', 'index@loginForm');
Route::get('signup', 'index@signup');
Route::any('regis', 'index@regis');
Route::any('login', 'index@login');
Route::any('logout', 'index@logout');

Route::get('informationForm', 'user@informationForm');
Route::get('information', 'user@information');
Route::any('informationAdd', 'user@informationAdd');

Route::get('question', 'question@question');
Route::any('answer', 'question@answer');
Route::any('addQuestion', 'question@addQuestion');
Route::any('deleteQuestion', 'question@deleteQuestion');
Route::any('editQuestion', 'question@editQuestion');
Route::any('result', 'question@result');
Route::any('resultchart', 'question@resultchart');
Route::any('resultquestion/{id?}', 'question@resultquestion');

Route::get('questionadmin', 'questionadmin@question');
Route::any('answeradmin', 'questionadmin@answer');
Route::any('addQuestionadmin', 'questionadmin@addQuestion');
Route::any('deleteQuestionadmin', 'questionadmin@deleteQuestion');
Route::any('editQuestionadmin', 'questionadmin@editQuestion');
Route::any('resultadmin', 'questionadmin@result');
Route::any('resultadminchart', 'questionadmin@resultchart');
Route::any('resultadminquestion/{id?}', 'questionadmin@resultquestion');

Route::get('report', 'admin@report');
Route::get('user', 'admin@user');
Route::get('resultUser/{id?}', 'admin@resultUser');
Route::get('informationUser', 'admin@informationUser');

Route::get('profile', 'user@profile');

Route::get('confidential', 'question@confidential');
Route::get('integrity', 'question@integrity');
Route::get('availability', 'question@availability');

Route::any('one', 'questionadmin@one');


