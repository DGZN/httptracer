<?php

class EndpointGroupsController extends \BaseController {

	protected $endpointGroup;

	public function __construct( EndpointGroup $endpointGroup )
	{
		$this->endpointGroup = $endpointGroup;

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$endpointGroups = $this->endpointGroup->all();
		
		return $endpointGroups;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('endpointGroups.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		if ( ! $this->endpointGroup->fill($input)->isValid())
		{
			return Redirect::back()->withInput()->withErrors( $this->endpointGroup->errors );
		}

		$this->endpointGroup->save();

		return Redirect::route('endpointGroups.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$endpointGroup = $this->endpointGroup->find($id);
		$endpoints = EndPoint::where( 'gid', '=', $id )->get();

		return View::make('endpointGroups.show', [

			'endpointGroup' => $endpointGroup, 
			'endpoints' => $endpoints

		]);
	}


	/**
	 * Show the form for editing the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
