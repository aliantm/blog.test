<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Welcome to the homepage";
});

Route::get('/posts', function () {
    return "All post are here";
});
