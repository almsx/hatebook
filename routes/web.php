<?php

//use App\Models\Post;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	//Regresa todos los registros
	//return Post::all();
    return view('welcome');
});

//Añado una nueva ruta
//Obtenemos todos los post

/*Estos sirven para hacer cada uno de las peticiones
pero se soluciona con todo en el proximo linea*/

//Rutas una por una
/*
Route::get('posts', 'PostController@index');
//Almancenamos un post
Route::post('posts', 'PostController@store');
//Traemos un solo post
Route::get('posts/{post}', 'PostController@show');
//Actualizamos un post
Route::put('posts/{post}', 'PostController@update');
//Eliminamos un post
Route::delete('posts/{post}', 'PostController@destroy');
*/
Route::resource('posts', 'PostController');




/*
Route::get('/phpmyadmin', function(){
	return redirect("http://localhost/phpmyadmin");
});

Route::resource('admin', 'AdministradoresController');
*/
Auth::routes();

Route::get('/home', 'HomeController@index');
