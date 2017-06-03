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
Route::get('posts', 'PostController@index');
Route::post('posts', 'PostController@store');




/*
Route::get('/phpmyadmin', function(){
	return redirect("http://localhost/phpmyadmin");
});

Route::resource('admin', 'AdministradoresController');
*/