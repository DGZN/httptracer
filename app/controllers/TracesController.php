<?php

class TracesController extends \BaseController {

	
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
	public function index($id)
	{
		return 'showing all traces for' . $id;
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
	public function show($endpointId)
	{
		$endpoint = $this->endpoint->findOrFail( $endpointId );

		$trace   = $this->trace->find( $endpoint->URI );

		foreach ($trace['records'] as $trace) {
			
			$data['data'][] = [

				$trace['time'],
				$trace['date'],
				$trace['timestamp'],
				$endpointId . '-' . $trace['timestamp'] . ':' .  $trace['time'],
				'test'

			];
		}

		return Response::json($data);
	}

	/**
	 * Display all traces for passed in endpoint ID
	 *
	 * @param  int  $id
	 * @return Tracess
	 */
	public function byEndpointId($endpointId)
	{

		$endpoint = $this->endpoint->findOrFail( $endpointId );

		$trace   = $this->trace->find( $endpoint->URI );

		return Response::json(array(

			'id' => $endpointId,
			'endpoint'   => $endpoint,
			'trace'     => $trace

		));
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
		$id_trace = explode('-', $id);

		$endpointId = $id_trace[0];

		$traceValue = $id_trace[1];

		$endpoint = $this->endpoint->findOrFail( $endpointId );

		$trace   = $this->trace->deleteByValue( $endpoint->URI, $traceValue );

		die(json_encode(array(

			'id' => $id,
			'endpointId' => $endpointId,
			'value'  => $traceValue,
			'endpoint'   => $endpoint,
			'response'     => $trace

		)));
	}


}
