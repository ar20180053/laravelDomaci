<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostTestController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return $posts;
    }
    public function show(Post $post)
    {
        //$post = Post::find($id);
        return new PostResource($post);
    }
}
