<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoccerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/soccer', [SoccerController::class, 'index'])->name('soccer');