<?php

namespace App\Http\Controllers;


use App\Models\Post;

class PostController extends Controller
{
    public function index(){

        return view('posts.index', [
            'posts' => Post::latest()->filter(
                request(['author'])
            )->get()
        ]);
    }

    public function show(Post $post) {

        return view('post', [
            'post' => $post
        ]);
    }
}
