<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

// use App\Http\Requests\ProfileUpdateRequest;
// use App\Http\Requests\StorePostRequest;
// use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
/**
 * Display a listing of the resource.
 */
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->paginate()
        ]);
    }

/**
 * Show the form for creating a new resource.
 */
    public function create(Post $post)
    {
        return view('posts.create', compact('post'));
        // return view('posts.create', ['post' => $post]);
    }

/**
 * Store a newly created resource in storage.
 */
    public function store(Request $request)
    {
        //validación de nulos y duplicados
        $request->validate([
            'title'=>'required',
            'slug' =>'required|unique:posts,slug',
            'body' =>'required',
        ],[
            'title.required'=>'Se requiere un título',
            'slug.required' =>'Colocar la url',
            'slug.unique'   =>'La Url debe ser única',
            'body.required' =>'Se requiere de un mensaje',
        ]);

        //preparación de guardado en bd
        $post = $request->user()->posts()->create([
            'title' => $request->title,
            'slug'  => $request->slug,
            'body'  => $request->body,

            // 'slug'  => $request->slug($title),
            // 'slug'  => Str::slug($title),
        ]);
        return redirect()->route('posts.edit', $post); //index
    }

/**
 * Show the form for editing the specified resource.
 */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
        // return view('posts.create', ['post' => $post]);
    }



/**
 * Update the specified resource in storage.
 */
    public function update(Request $request, Post $post)
    {
        //validación URL amigables
        $request->validate([
            'title'=>'required',
            // 'slug' =>'required|unique:posts,slug,'.$post->id,
            'slug' =>['required', Rule::unique('posts', 'slug')->ignore($post->id)],
            'body' =>'required',
        ],[
            'title.required'=>'Se requiere un título',
            'slug.required' =>'Colocar la url',
            'slug.unique'   =>'La Url debe ser única',
            'body.required' =>'Se requiere de un mensaje',
        ]);

        $post->update([
            'title' => $request->title,
            'slug'  => $request->slug,
            // 'slug'  => Str::slug($request->title),
            'body'  => $request->body,
        ]);

        return redirect()->route('posts.edit', $post);
    }


/**
 * Remove the specified resource from storage.
 */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
        // return back();
    }
}
