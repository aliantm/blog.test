<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\If_;
use Symfony\Component\Routing\Route as RoutingRoute;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class,'index']);

Route::get('posts/create', [PostController::class,'create']);

Route::get('posts/{post}', [PostController::class,'show']);

Route::get('prueba', function(){
$post = Post::find(1);
dd($post->is_active);
});


