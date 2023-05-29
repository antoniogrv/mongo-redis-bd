<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('pages.post_create');
    }

    public function store(Request $request)
    {
        $post = Post::query()->create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'body' => $request->input('body'),
            'image' => 'assets/' . rand(1, 10) . '.jpeg',
            'author_id' => Author::all()->random()->first()->id,
        ]);

        return view('pages.post_detail', ['post' => $post]);
    }

    public function show(Post $post)
    {
        return view('pages.post_detail', ['post' => $post]);
    }
    public function edit(Post $post)
    {
        return view('pages.post_update', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $post->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'body' => $request->input('body'),
        ]);

        return view('pages.post_detail', ['post' => $post]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('home')->with([
            'message' => 'Post eliminato con successo!'
        ]);
    }
}
