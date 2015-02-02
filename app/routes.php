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

Route::group(array('prefix' => '/api', ''), function()
{
    Route::post('login', function() {
//        return "TEST";
        Log::info(Input::all());
        $login = Input::get('username');
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $user = User::where('username', '=', $login)->first();
        Log::info($user);

        if (Auth::once(array($field => $login, 'password' => Input::get('password')))) {
            $user = Auth::user();

            $key = Uuid::generate(5, $user->username, Uuid::nsDNS);

            $user->key = (string)$key;

            if($user->save()) {
                return Response::json([
                    'success' => true,
                    'data' => $user,
                    'message' => 'Successfully logged in!'
                ]);
            } else {
                return Response::json([
                    'success' => false,
                    'message' => 'Unable to generate session key.'
                ]);
            }

        } else {
            return Response::json([
                'success' => false,
                'message' => 'Invalid username or password.'
            ]);
        }

    });

    Route::group(array('before' => 'api'), function() {
        Route::resource('conversations', 'ConversationsController');
        Route::resource('conversations.messages', 'MessagesController');
        //Route::resource('message', 'MessagesController');
        Route::resource('spots', 'SpotsController');
        //Route::resource('comment', 'CommentsController');
        Route::resource('posts', 'PostsController');
        Route::resource('posts.comments', 'CommentsController');
        Route::resource('users', 'UsersController');
        Route::resource('catches', 'CatchesController');
    });
});
