<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Login', function () {
    return view('login');
});

Route::get('/Create', function () {
    return view('create');
});

Route::get('/Contact', function () {
    return 'contact';
});
