<?php

Route::get('register', 'UserController@showRegister');
Route::post('register', 'UserController@register')->name('register');

Route::get('login', 'UserController@login')->name('login');

Route::get('user', 'UserController@userProfile')->name('user.profile');