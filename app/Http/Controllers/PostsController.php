<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', compact('posts'));
    }
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {
        //create new post using the request data
        // $post = new Post;

        // $post->title = request('title');
        // $post->category = request('category');
        // $post->body = request('body');

        // //saves to the database
        // $post->save();
        $this->validate(request(), [
            'title' => 'required',
            'category' => 'required',
            'body' => 'required'
        ]);

        auth()->user()->publish(
            new Post(request(['title', 'category', 'body']))
        );



        //and then redirect back to the homepage
        return redirect('/');
    }
}
