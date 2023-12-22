<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home/index');
});

Route::get('/diagnostico', function () {
    return view('diagnostic/diagnostic');
});




