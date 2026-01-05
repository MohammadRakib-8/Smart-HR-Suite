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
// Route::get('/', function () {
//     return view('login');
// });
 

Route::get('/quickActions',[PostController::class,'quickActionFn'])->name('quickAc');
Route::post('/addUser',[PostController::class,'addUserFn'])->name('storeUserData');

// Route::get('/hr',function(){
//     return view('hr');})->name('hrPage');
    
    Route::get('/addUser', function () {
    return view('addUser');
})->name('addUserPage');

Route::get('/',[PostController::class,'dataRetriveIndex'])->name('hrPage'); 
Route::delete('/users/{id}',[PostController::class,'deleteData'])->name('delete');

Route::post('/absent/{id}', [PostController::class, 'markAbsent'])
     ->name('markAbsent');



Route::get('/employee/{id}/edit', [PostController::class, 'editEmployee'])->name('employee.edit');
Route::put('/employee/{id}', [PostController::class, 'updateEmployee'])->name('employee.update');



////////////////////////
Route::get('/employee/{id}/payroll', [PostController::class, 'calculatePayroll'])->name('employee.payroll');

// Route::post('/login', [PostController::class, 'login'])->name('login');

// Route::post('/logout', function (Request $request) {
//     Auth::logout();
//     $request->session()->invalidate();
//     $request->session()->regenerateToken();
//     return redirect('/');
// })->name('logout');
