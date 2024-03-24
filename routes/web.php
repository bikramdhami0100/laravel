<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('hello', 'post');
Route::get('/post/nothing', function () {
    return view ("post");
})->name("mypost");
Route::redirect('/post', '/',301);
// Route::prefix("page")->group(function () {
//    Route::get('/about', function () {
//        return"<h1>about page from group</h1>";
//    });
//    Route::get('/gallery', function () {
//     return"<h1>gallery page from group</h1>";
// });
// Route::get('/photos', function () {
//     return"<h1>photos page from group</h1>";
// });
// });
Route::fallback(function(){
    return "hello this is bikram dhami";
});