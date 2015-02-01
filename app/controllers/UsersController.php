<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
	    $user = new User;

        $user->fill(Input::get('data'));
        $user->password = Hash::make(Input::get('data.password'));

        Log::info($user);

        if($user->save()) {
            return Response::json([
                'success' => true,
                'message' => 'User account created!'
            ]);
        } else {
            return Response::json([
                'success' => false,
                'errors' => join($user->getErrors()->all(':message<br/>')),
                'message' => 'Unable to Create Account'
            ]);
        }
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
