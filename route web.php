<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DictionaryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dictionary', [DictionaryController::class, 'index']);

