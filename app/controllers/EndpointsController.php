<?php

class EndpointsController extends \BaseController {

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
		
		return View::make('endpoints.index', ['endpoints' => $endpoints]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('endpoints.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		if ( ! $this->endpoint->fill($input)->isValid())
		{
			return Redirect::back()->withInput()->withErrors( $this->endpoint->errors );
		}

		$this->endpoint->uid = Auth::user()->id; 

		$this->endpoint->save();

		return Redirect::route('endpoints.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$endpoint = $this->endpoint->findOrFail($id);

		$traces   = $this->trace->find($endpoint->URI);
		return $traces;
		return View::make('endpoints.show', [

			'endpoint' => $endpoint,
			'traces' => $traces

		]);
	}

	/**
	 * Graphs Specified Resource
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function graph()
	{
		
		return View::make('endpoints.graph');

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$endpoint = $this->endpoint->findOrFail($id);

		$traces   = $this->trace->find($endpoint->URI);
		
		return View::make('endpoints.edit', [

			'endpoint' => $endpoint,
			'traces' => $traces

		]);
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
