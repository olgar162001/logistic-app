<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParcelController;

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');


Route::get('/users', [UserController::class, 'users']);
// Route::put();
// Route::delete();

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register',function(){
    return view('auth.register');
})->name('register');

Route::post('/signup',[UserController::class, 'register']);
Route::get('/logout',[USerController::class,'logout'])->name('logout');
Route::post('/signin',[USerController::class,'login']);

Route::resource('parcel', ParcelController::class);
Route::get('/parcel/{id}/edit-status', [ParcelController::class, 'editStatus'])->name('parcel.edit-status');
Route::post('/parcel/{id}/update-status', [ParcelController::class, 'updateStatus'])->name('parcel.update-status');
Route::get('/parcel',[ParcelController::class, 'Status'])->name('parcel.status');
