<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Welcome to the homepage";
});

Route::get('/posts', function () {
    return "Welcome to the homepage 2";
});
