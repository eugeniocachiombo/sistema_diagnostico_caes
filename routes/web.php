<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DiagnosticController;

Route::get('/', [HomeController::class, "index"]);

Route::get('/diagnostico', [DiagnosticController::class, "index"]);
Route::post('/diagnostico', [DiagnosticController::class, "check"]);




