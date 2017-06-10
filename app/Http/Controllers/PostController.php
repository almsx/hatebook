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

    /* Función de Index Normal */

    /*
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

    */

    /* Esta función permite crear una petición dentro del buscador
    para que peudan buscarse solo posts especificos a partir de la 
    busqueda en content*/

    public function index(Request $request){
        $eb = Post::where('user_id', \Auth::user()->id);

        if($request->search){
            $eb->where('content', 'like', '%'.$request->search.'%');
        }

        $posts = $eb->latest()
        //->get();
        //Paginaremos
        ->paginate(10);

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

        //Creación de mensajes
        session()->flash('message', 'Pinche post creado');

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
        //Esta linea devuelve un reponse
        //return ['status' => 'true'];
        //Esta linea devuelve un mensaje y redirecciona
        session()->flash('message', 'Se fue ALV el post');

        return redirect('posts');
    }
}
