<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\If_;
use Symfony\Component\Routing\Route as RoutingRoute;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class,'index']);

Route::get('posts/create', [PostController::class,'create']);

Route::get('posts/{post}', [PostController::class,'show']);


