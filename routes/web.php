<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     return view('hr');
// });

// Route::get('/login', function () {
//     return view('login');
// });


Route::get('/registerHR', function () {
    return view('registerHR');
});
Route::get('/statistics', function () {
    return view('statistics');
});
Route::get('/login', function () {
    return view('login');
});
 

Route::get('/quickActions',[PostController::class,'quickActionFn'])->name('quickAc');
Route::post('/addUser',[PostController::class,'addUserFn'])->name('storeUserData');

// Route::get('/hr',function(){
//     return view('hr');})->name('hrPage');
    
    Route::get('/addUser', function () {
    return view('addUser');
})->name('addUserPage');

Route::get('/',[PostController::class,'dataRetriveIndex'])->name('hrPage'); 