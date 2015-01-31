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
	 * Show the form for creating a new resource.
	 * GET /spots/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
	 * Show the form for editing the specified resource.
	 * GET /spots/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
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
