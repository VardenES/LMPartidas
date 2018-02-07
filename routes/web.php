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


// http://www.easylaravelbook.com/blog/2015/03/09/passing-multiple-variables-into-a-laravel-5-view/
// La idea es pasar por día todos los valores de franjas horarias y actividades y que el filtro lo realice en la vista.
Route::get('/actividades/{slug}', function ($slug) {
	$posts = App\Post::where('category_id', '=', $slug)->get();
	return view('viernes', compact('posts'));
});

Route::get('/usuarios', function () {
	$usuarios = App\User::all();
	return view('usuarios', compact('usuarios'));
});












// https://devdojo.com/blog/tutorials/working-with-voyager-on-the-front-end

Route::get('login', function(){

});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
Inicio
Noticias
Información
- Como llegar
- Instalaciones
- ...
Actividades
- Partida de Rol
- Rol en Vivo
- Juegos de Mesa
Contacto
- Proponer actividad
- Inscribir

});

*/


// PAGINAS //
Route::get('/informacion', function () {
	$pages = App\Page::all();
	return view('paginas', compact('pages'));
});

/*Route::get('/como-llegar', function () {
	$page = App\Page::where('slug', '=', $slug)->firstOrFail();
	return view('pagina', compact('page'));
});*/

Route::get('{slug}', function($slug){
	$page = App\Page::where('slug', '=', $slug)->firstOrFail();
	return view('pagina', compact('page'));
});

/*Route::get('/faq', function () {
	$posts = App\Post::all();
	return view('noticias', compact('posts'));
});
Route::get('/normas', function () {
	$posts = App\Post::all();
	return view('noticias', compact('posts'));
});
Route::get('/lugares', function () {
	$posts = App\Post::all();
	return view('noticias', compact('posts'));
});*/
// ACTIVIDADES //
Route::get('/rol', function () {
	$posts = App\Post::all();
	return view('noticias', compact('posts'));
});
Route::get('/rev', function () {
	$posts = App\Post::all();
	return view('noticias', compact('posts'));
}); 
Route::get('/mesa', function () {
	$posts = App\Post::all();
	return view('noticias', compact('posts'));
});
Route::get('/otras', function () {
	$posts = App\Post::all();
	return view('noticias', compact('posts'));
});


// ACTIVIDADES //

	//Route::get('actividades','ActivityController@index');

	// show new activity form
	//Route::get('new-activity','ActivityController@create');
	// save new activity
	//Route::post('new-activity','ActivityController@store');
	// edit post form
	//Route::get('edit/{slug}','ActivityController@edit');
	// update post
	//Route::post('update','ActivityController@update');
	// delete post
	//Route::get('delete/{id}','ActivityController@destroy');
	// display user's all posts
	//Route::get('my-all-posts','UserController@user_posts_all');
	// display user's drafts
	//Route::get('my-drafts','UserController@user_posts_draft');


	//users profile
	Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');
	// display list of posts
	Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');
	// display single post
	//Route::get('/{slug}',['as' => 'post', 'uses' => 'ActivityController@show'])->where('slug', '[A-Za-z0-9-_]+');


Route::get('bladetemplate', function (){
	$drinks = array('Vodka', 'Gin', 'Brandy');
	return view('luduspage', array('name' => 'The Raven', 'day' => 'Friday', 'drinks' => $drinks));
});


Route::get('bootstrap', function (){
	$drinks = array('Vodka', 'Gin', 'Brandy');
	$posts = App\Post::orderBy('created_at', 'desc')->take(3)->get();

	return view('bootstrappage', array('name' => 'The Raven', 'day' => 'Friday', 'drinks' => $drinks, 'posts' => $posts));
});



/* // franja //
"Viernes Mañana"
"Viernes Noche"
"Sábado Mañana"
"Sábado Tarde"
"Sábado Noche"
"Domingo Mañana"
"Domingo Tarde"
*/



Route::get('/actividades', function () {
	$actividades = App\Actividade::all();
	return view('actividades0', compact('actividades'));
});
Route::get('/rol', function () {
	$actividades = App\Actividade::where('tipo', '=', 'ROL')->get();
	return view('actividades0', compact('actividades'));
});
Route::get('/mesa', function () {
	$actividades = App\Actividade::where('tipo', '=', 'JDM')->get();
	return view('actividades0', compact('actividades'));
});
Route::get('/rev', function () {
	$actividades = App\Actividade::where('tipo', '=', 'REV')->get();
	return view('actividades0', compact('actividades'));
});
Route::get('/otros', function () {
	$actividades = App\Actividade::where('tipo', '=', 'OTROS')->get();
	return view('actividades0', compact('actividades'));
});

Route::get('myrtea', function (){
	return view('myrthome');
});