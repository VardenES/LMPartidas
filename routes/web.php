<?php

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
    return view('welcome');
});

Route::get('/create', function(){
	return view('create');
});

Route::get('/register', function(){
	return view('register');
});

Route::get('/inicio', function () {
    return view('create');
});

Route::get('/noticias', function () {
	$posts = App\Post::all();
	return view('noticias', compact('posts'));
});

Route::get('post/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->firstOrFail();
	return view('noticia', compact('post'));
});

// https://devdojo.com/blog/tutorials/working-with-voyager-on-the-front-end

Route::get('login', function(){

});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
