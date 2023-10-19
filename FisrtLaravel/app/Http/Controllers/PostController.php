<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        //$posts = Post::orderBy('create_at','desc')->paginate(10);
        //dd($posts);//test demo
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $post = new Post();
        $post->title = $validatedData['title'];
        $post->body = $validatedData['body'];
        $post->save();

        return redirect()->route('posts.index');//chuyển hướng trang au khi thực hiện
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);
    
        $post->title = $validatedData['title'];
        $post->body = $validatedData['body'];
        $post->save();
    
        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return back()->with('error', 'Post not found');
        }

        $post->delete();

        return redirect()->route('posts.index');
    }
}