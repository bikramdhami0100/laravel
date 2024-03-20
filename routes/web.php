<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('hello', 'post');
Route::get('/user', function () {
    return "{name: birkam dhami}";
});