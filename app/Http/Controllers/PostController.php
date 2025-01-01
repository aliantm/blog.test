<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Mail\PostCreatedMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\FuncCall;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id','desc')
                        ->paginate(10);
       
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(StorePostRequest $request){
        /*$request->validate([
            'title' => 'required|min:5|max:255',
            'slug'  => 'required|unique:posts',
            'category' => 'required',
            'content' => 'required',
        ]);*/
        $post = Post::create($request->all());
        Mail::to('prueba@prueba.com')->send(new PostCreatedMail($post));
        /*
        $post = new Post();
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->save();*/

        return redirect()->route('posts.index');
        //return redirect('/posts');

    }

    public function show(Post $post){
        //$post = Post::find($post);
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post){
        //$post = Post::find($post);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post){
        //$post = Post::find($post);

        $request->validate([
            'title' => 'required|min:5|max:255',
            'slug'  => "required|unique:posts,slug,{$post->id}",
            'category' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->all());

        /*$post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();*/
        return redirect()->route('posts.show',$post);
        //return redirect("/posts/{$post->id}");
    }

    public function destroy(Post $post){
        //$post = Post::find($post);
        $post->delete();
        return redirect()->route('posts.index');
        //return redirect("/posts");
    }

}
