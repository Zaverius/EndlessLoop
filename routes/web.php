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

//Front para usuarios

Route::get('/', function () {
    return view('home');
});

Route::get('/olympus-heir', function () {
    return view('olympus-heir');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/noticias', function() {

	$noticias = DB::table('noticias')->orderBy('created_at', 'desc')->simplePaginate(10);

	return view('noticias', compact('noticias'));
});

Route::get('/noticias/{slug}', function($slug) {

	$noticia = App\Noticia::where('slug', '=', $slug)->first();

	return view('show-noticia')->with('noticia', $noticia);
});


//Backoffice para administradores

Route::get('/admin', function() {
	return view('admin.index');
});

Route::get('/admin/login', 'CustomLoginController@index');

Route::post('/admin/login', 'CustomLoginController@logIn');

Route::get('/admin/logout', 'CustomLoginController@logOut');

Route::get('/admin/noticias', 'NoticiasController@index');

Route::get('/admin/noticias/crear', 'NoticiasController@create');

Route::post('/admin/noticias/crear', 'NoticiasController@store');

Route::get('/admin/noticias/edit/{id}', 'NoticiasController@edit');

Route::post('/admin/noticias/edit/{id}', 'NoticiasController@update');

Route::delete('/admin/noticias/{id}', 'NoticiasController@destroy');

Route::get('/admin/contactos', 'ContactManager@index');

Route::get('/admin/contactos/crear', 'ContactManager@create');

Route::post('/admin/contactos/crear', 'ContactManager@store');

Route::get('/admin/contactos/edit/{id}', 'ContactManager@edit');

Route::post('/admin/contactos/edit/{id}', 'ContactManager@update');

Route::delete('/admin/contactos/{id}', 'ContactManager@delete');

Route::post('/admin/contactos/', 'ContactManager@deleteMultiple');

Route::get('/admin/prueba', function() {

	$contactos = App\Contacto::all();

	return view('admin.prueba')->with('contactos', $contactos);

});