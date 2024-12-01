<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [PostController::class, 'index']);

Route::resource('posts', PostController::class)->except('index'); // make urls for all of the actions found in a controller except the index func
Route::get('test', [CarsController::class, 'index']);