<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /**
         * First way to store data  
         */
        // $post = new Post();
        // $post->title = $request->title;
        // $post->body = $request->body;

        // $post->save();


        Post::create(
            //Using this
            // [
            //  'title' => $request->title,
            //  'body' => $request->body,
            // ]

            //OR this, but should the names in the form input should be same as the names of the model 
            $request->all()
        );


        return response('تم اضافة البيانات بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $posts = Post::onlyTrashed()->get();
        return view('posts.softDelete', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::findorFail($id);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::findorFail($id);

        $post->update(
            [
                'title' => $request->title,
                'body' => $request->body,
            ]
        );

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findorFail($id)->delete();
        return redirect()->route('posts.index');
    }

    public function restore($id)
    {
        Post::withTrashed()->where('id', $id)->restore();
        return redirect()->route('posts.index');
    }

    public function forceDelete($id)
    {
        Post::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->route('posts.index');
    }

    public function modelScope()
    {
        $posts = Post::ahmed()->first();
        return $posts;
    }
}
