<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/home', [ViewController::class, 'home']);
Route::get('/about', [ViewController::class, 'about']);
Route::get('/contact', [ViewController::class, 'contact']);


