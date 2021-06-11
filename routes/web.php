<?php

Route::get('/', 'index@index');
Route::get('loginForm', 'index@loginForm');
Route::get('signup', 'index@signup');
Route::any('regis', 'index@regis');
Route::any('login', 'index@login');
Route::any('logout', 'index@logout');

Route::get('question', 'question@question');
Route::any('answer', 'question@answer');
Route::any('addQuestion', 'question@addQuestion');
Route::any('deleteQuestion', 'question@deleteQuestion');
Route::any('editQuestion', 'question@editQuestion');
Route::any('result', 'question@result');

Route::get('questionadmin', 'questionadmin@question');
Route::any('answeradmin', 'questionadmin@answer');
Route::any('addQuestionadmin', 'questionadmin@addQuestion');
Route::any('deleteQuestionadmin', 'questionadmin@deleteQuestion');
Route::any('editQuestionadmin', 'questionadmin@editQuestion');
Route::any('resultadmin', 'questionadmin@result');

Route::get('report', 'admin@report');

Route::get('profile', 'user@profile');


