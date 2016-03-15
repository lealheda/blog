<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
	Tipos de rutas:
	GET, POST, PUT, DELETE, RESOURCE	
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('articles', function () {
    echo "Esta es la seccion de articulos";
});

Route::get('/app/public/{algo}', function ($algo) {
    //return view('parametro')->with('variable', $algo);
    $view = View::make('parametro')->with('variable',$algo)->nest('child', 'subview');
    return $view;
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
