<?php

use App\Http\Controllers\MathController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MathController::class, 'showForm']);
Route::post('/solve', [MathController::class, 'solve']);