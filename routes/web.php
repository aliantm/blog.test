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
/*  //CREATE 
$post = new Post();
$post->title = "Titulo de prueba 3";
$post->content = "Contenido de prueba 3";
$post->categoria = "Categoria de prueba 3";

$post->save();

return $post;*/

/* UPDATE
$post = Post::find(1);
$post = Post::where('title','Titulo de prueba 2')
        ->first();
$post->content = "Desarrollo Web";
$post->save();
return $post;

*/

/* LISTAR POSTS
$post = Post::orderBy('categoria','desc')
        ->select('id','title','categoria')
        ->take(2)
        ->get();
return $post;
*/
$post = Post::find(1);
$post->delete();
return "Post deleted";


});


