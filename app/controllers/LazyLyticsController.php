<?php

class LazyLyticsController extends \BaseController {

	
	protected $endpoint;
	protected $trace;

	public function __construct( Endpoint $endpoint, Trace $trace )
	{
		$this->endpoint = $endpoint;
		$this->trace    = $trace;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$endpoints = $this->endpoint->whereuid( Auth::user()->id )->get();

		foreach ( $endpoints as $endpoint ) {
		
			$endpoint['traces'] = $this->trace->find($endpoint->URI);

		}

		return $endpoints;

		return View::make('lazylytics.index', ['endpoints' => $endpoints] );
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function analytics()
	{

		$endpoints = $this->endpoint->whereuid( Auth::user()->id )->get();

		foreach ( $endpoints as $endpoint ) {
		
			$endpoint['traces'] = $this->trace->find($endpoint->URI);

		}

		return View::make('lazylytics.analytics', ['endpoints' => $endpoints] );
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
