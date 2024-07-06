<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LibrarianController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'users')->name('users');
    Route::get('/profile', 'profile')->name('users.profile');
    Route::post('/addUser', 'addUser')->name('addUser');
    Route::get('/deleteUser/{id}', 'deleteUser')->name('deleteUser');
});

Route::controller(BooksController::class)->group(function () {
    Route::get('/books', 'books')->name('books');
    Route::get('/formbooks','FormBooks')->name('form.books');
    Route::post('/store', 'store')->name('books.store');
    Route::get('/edit/{id}', 'edit')->name('books.edit');
    Route::get('/delete/{id}', 'delete')->name('books.delete');
    Route::post('/update/{id}', 'update')->name('books.update');
});


Route::controller(LibrarianController::class)->group(function () {
    Route::get('/librarians', 'librarians')->name('librarians');
    Route::get('/formlibrarians','FormLibrarians')->name('form.librarians');

});






