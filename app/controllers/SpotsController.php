<?php

class SpotsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /spots
	 *
	 * @return Response
	 */
	public function index()
	{
		$spots = Spot::get();

        return $spots;
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /spots
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /spots/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$spot = Spot::findOrFail($id);

        return $spot;
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /spots/{id}
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
	 * DELETE /spots/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
