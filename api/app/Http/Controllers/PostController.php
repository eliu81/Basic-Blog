<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        sleep(1); // Solo para simular el efecto de latencia entre cliente, servidor.
        $posts = Post::orderBy('id', 'desc')->get();
        return $posts->map(function($value, $key) {
            return [
                'id' => $value->id,
                'title' => $value->title,
                'author' => $value->author,
                'body' => substr($value->body, 0, 70),
                'created_at' => $value->created_at,
                'updated_at' => $value->updated_at
            ];
        });
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        sleep(1); // Solo para simular el efecto de latencia entre cliente, servidor.
        $request->validate([
            'title' => 'required',
            'body' => 'required',
          ]);
          return Post::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return $post;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
