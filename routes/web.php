<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrosController;
use App\Http\Controllers\Vistas;
use Illuminate\Support\Facades\Route;

Route::controller(Vistas::class)->group(function(){
    Route::get('/','index')->name('view-home');
    Route::get('/auth/login','index_auth')->name('view-auth');
    Route::get('/manager/home','index_manager')->name('view-manager');
    Route::get('/manager/create','view_create')->name('view-manager-create');
});
Route::controller(AuthController::class)->group(function(){
    Route::post('/auth/signup','signUp')->name('auth-signup');
    Route::post('/auth/signin','signIn')->name('auth-signin');
    Route::get('/auth/signout','signOut')->name('auth-signout');
});
Route::controller(RegistrosController::class)->group(function(){
    Route::post('/manager/store','store')->name('manager-store');
    Route::get('/manager/edit/{id}','edit')->name('manager-edit');
    Route::post('/manager/update/{id}','update')->name('manager-update');
    Route::get('/manager/delete/{id}','delete')->name('manager-delete');
});