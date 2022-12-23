<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\UserController;
use App\Models\catagory;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
return view('auth.login');
});

require __DIR__. '/auth.php';


Route::get('/user', function () {
    return view('user.home');
})->middleware(['auth'])->name('dashboard');


Route::get('/admin', function () {
    return view('admin.home');
})->middleware(['auth'])->name('dashboardadmin');


Route::resource('Admin', AdminController::class)->middleware(['auth']) ;

Route::controller(AdminController::class)->group(function () {
    Route::get('/admiin/home', 'home')->name('Admiin.home');
});

Route::resource('user', UserController::class)->middleware(['auth']) ;

Route::controller(UserController::class)->group(function () {
    Route::get('user/home', 'home')->name('useer.home');
    Route::get('books', 'books')->name('userBooks');
    Route::post('books',  'search')->name('userSearch');
    Route::get('books/Public', 'public')->name('publicBooks');
    Route::get('books/kids',  'kids')->name('kidsBooks');
    Route::get('books/classic', 'classic')->name('classicBooks');
});


Route::resource('catagory' , CatagoryController::class)->middleware(['auth']);

