<?php

use Illuminate\Support\Facades\Route;
function getDetail(){
    return [
        1=>["name"=>"bikram","cast"=>"dhami","age"=>23]
    ];
}
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
    return "this page is not available";
});
Route::get('users/{id}', function ($id) {
  $users=getDetail();
    return view("users",["userid"=>$id,"userdetail"=>$users]);
});
