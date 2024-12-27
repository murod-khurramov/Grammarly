<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $posts = Post::all();
        return view('home', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('post', compact('post'));
    }
}
