<?php

    use Core\Route;

    Route::get('/', 'HomeController@index')->name('home');
    Route::post('/check-input', 'BracketController@validateBrackets');