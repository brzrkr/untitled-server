<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::group(array('prefix' => '/api'), function()
{
    Route::post('login', function() {

        $login = Input::get('username');
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt(array($field => $login, 'password' => Input::get('password')))) {
            $user = Auth::user();

            $key = Uuid::generate(5, $user->name, Uuid::nsDNS);

            $user->key = $key;

            $user->save();

            $user->$key;

            return $user;

        } else {
            return Response::view('errors.404', array(), 404)->header('Content-Type', 'application/json');
        }

    });

    Route::resource('conversations', 'ConversationsController');
    Route::resource('conversations/messages', 'MessagesController');
    //Route::resource('message', 'MessagesController');
    Route::resource('spots', 'SpotsController');
    //Route::resource('comment', 'CommentsController');
    Route::resource('posts', 'PostsController');
    Route::resource('posts/comments', 'CommentsController');
    Route::resource('users', 'UsersController');
    Route::resource('catches', 'CatchesController');
});
