<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\task01;


Route::get('/', function () {
    return view('Home');
});
Route::get('/add', [task01::class, 'add']);
Route::get('/show', [task01::class, 'show']);
Route::post('/store', [task01::class, 'store']);
