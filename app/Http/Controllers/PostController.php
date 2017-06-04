<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mostramos todos en forma de APU
        //return Post::all();
        //Mostramos todos en forma de web
        //de todos los usuarios
        //$posts = Post::all();
        
        //Mostramos solo los mios
        //en orden descendente a partir
        //de la fecha de creación
        $posts = Post::where('user_id',\Auth::user()->id)
        //Con estos se ordenan de acuerdo a mi seleccion
        //->orderBy('created_at', 'desc')
        //Utilizamos la funcion latest para ordenarlo
        //basado en el campo created_at
        ->latest()
        ->get();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Equivalente a un var_dump
        //dd($request->content);
        //Almacenaremos la información
        //dd($request->all());
        //Con esta función insertamos dentro de la base de datos
        //dd('chelsea');
        //return Post::create($request->all());

        Post::create([
            'content' => $request->content,
            'user_id' => \Auth::user()->id
        ]);

        return redirect('posts');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //Lo que venga lo debe de mostrar
        //return $post;
        //Muestre una vista
        //return view('posts.post', compact('post'));
     return view('posts.post')->withPost($post);
        //Revisar el tema de Paso de variables

 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //Logica Inicial
        //$post->content = $request->content;
        //$post->save();
        //Forma correcta de actualizar
        $post->update($request->all());
        return $post;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return ['status' => 'true'];
    }
}
