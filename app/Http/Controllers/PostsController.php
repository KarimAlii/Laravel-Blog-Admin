<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function showPosts(){
        $posts = Post::all();
        return view('welcome',compact('posts'));
    }
    public function showPost(){
        $post = Post::all();
        return view('post',compact('post'));
    }
}
