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


Route::get('test', function () {
    return view('test');
});
Route::get('test2', function () {
    return view('test');
});

// Route::get('1', function() { return 'Je suis la page 1 !'; });
// Route::get('2', function() { return 'Je suis la page 2 !'; });
// Route::get('3', function() { return 'Je suis la page 3 !'; });

// Route::get('{n}', function($n) {
// 	return 'Je suis la page ' . $n . ' !';
// })->where('n', '[1-3]');

//  Route::get('{n}', function($n) {
// 	  return response('Je suis la page ' . $n . ' !', 200);
// })->where('n', '[1-3]');
//
// Route::get('/', ['as' => 'home', function()
// {
//   return 'Je suis la page d\'accueil !';
// }]);
//
// Route::get('article/{n}', function($n) {
//     return view('article')->with('numero', $n);
// })->where('n', '[0-9]+');
//
// Route::get('facture/{n}', function($n) {
//     return view('facture')->withNumero($n);
// })->where('n', '[0-9]+');


Route::get('/', 'WelcomeController@index');
Route::get('/', ['uses' => 'WelcomeController@index', 'as' => 'home']);


Route::get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+');

Route::get('users', 'UsersController@getInfos');
Route::post('users', 'UsersController@postInfos');

Route::get('contact', 'ContactController@contactForm');
Route::post('contact', 'ContactController@postForm');


Route::get('photo', 'PhotoController@getForm');
Route::post('photo', 'PhotoController@postForm');
