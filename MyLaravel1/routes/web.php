<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('pag2', function () {
    return view('pageTwo');
});

Route::get('pag3', function () {
    return view('pageThree');
});
