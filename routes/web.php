<?php

use App\Http\Controllers\Vistas;
use Illuminate\Support\Facades\Route;

Route::controller(Vistas::class)->group(function(){
    Route::get('/','index')->name('view-inicio');
});