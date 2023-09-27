<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
 
    public function index()
    {
        $posts = Post::latest()->get();
        return view ('posts.index', compact('posts'));
    }


    public function create()
    {
        return view('posts.create');
    }

  
    public function store(PostRequest $request)
    {
        //dd($request->all());
        //salvar

        $post = Post::create([
            'user_id' => auth()->user()->id
        ] + $request->all());

        //imagen 

        if($request->file('file')){
            $post -> image = $request->file('file')->store('posts', 'public');
            $post->save();
        }

        //retornar
        return back()->with('status', 'Creado con exito');
    }

   
 
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

 
    public function update(PostRequest $request, Post $post)
    {
        //dd($request->all());
        $post->update($request->all());

        if ($request->file('file')) {
            //Storage::disk('public')->delete($post->image);
            $post->image = $request->file('file')->store('posts', 'public');
            $post->save();
        }

        return back()->with('status', 'Actualizado con éxito');
    }

   
    public function destroy(Post $post)
    {
        //eliminacion de la iamgen
        //Storage::disk('public')->delete($post->image);
        $post->delete();

        return back()->with('status', 'Eliminado con exito');
    }
    
}
