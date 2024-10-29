<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return 'home';
});

Route::get('/About', function () {
    return 'about';
});

Route::get('/Contact', function () {
    return 'contact';
});
