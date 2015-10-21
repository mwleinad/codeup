<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ["as" => "home", "uses" => "PagesController@home"]);

//Route::get('/', function () {
//    return view('pages.home');
//});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//routes to vote
Route::post('votes/upvote', 'VotesController@upvote');
Route::post('votes/downvote', 'VotesController@downvote');

//route to show error
Route::get('errors/show', 'ErrorsController@show');

Route::get('links/index', 'LinksController@index');
Route::resource('links', 'LinksController');
Route::get('{linkName}', 'LinksController@show');



/*    App::missing(function($exception)
    {
        // shows an error page (app/views/error.blade.php)
        // returns a page not found error
        return Response::view('error', array(), 404);
    });*/

