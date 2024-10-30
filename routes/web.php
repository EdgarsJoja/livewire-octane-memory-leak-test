<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/memory-test/{type?}', \App\View\Components\LivewirePage::class);
