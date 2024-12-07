<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class PostController extends Controller
{
    public function index(){
        return "Here will show all posts";
    }

    public function create(){
        return "Here we are going to create a form";
    }

    public function show($post){
        return "Here show the post {$post}";
    }
}
