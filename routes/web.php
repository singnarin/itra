<?php

Route::get('/', 'index@index');
Route::get('loginForm', 'index@loginForm');
Route::get('signup', 'index@signup');
Route::any('regis', 'index@regis');
Route::any('login', 'index@login');
Route::any('logout', 'index@logout');
Route::get('question', 'question@question');
