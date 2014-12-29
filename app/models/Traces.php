<?php

class Trace {

	protected $namespace = 'NINJABOX::Traces';

	public function find($URI)
	{
		if( ! $traces = $this->traces($URI)) return '!ERROR! -- Could Not Find Any Traces';
		
		// EVERYTHING AFTER THIS SHOULD BE ABSTRACTED

		$avg = 0;

		foreach ( array_reverse($traces) as &$trace) {
			
			if ( $e = explode(':', $trace) )
			{
				$data['records'][] = array(

					'time'      => $e[1],
					'date'      => date('Y-m-d H:i', $e[0]),
					'timestamp' => $e[0]

				);

				$avg  += (INT) $e[1];
				$int[] = (INT) $e[1];
			}

		}

		$timeSinceLastTrace = round( abs( time() - $data['records'][0]['timestamp'] ) / 60) ;

		$apdex = $this->calculate_apdex($data['records']);

		return [

			'avg'        => number_format(( $avg ? floor( $avg / count($traces) ) : 0 )),
			'min' 		 => number_format(min($int)),
			'max'		 => number_format(max($int)),
			'apdexScore' => sprintf("%.2f", $apdex['score']),
			'apdex'      => $apdex, // SHOULD BE IN OWN CLASS
			'report'     => $timeSinceLastTrace . ' minutes since last trace',
			'records'    => array_reverse($data['records'])

		];
		
	}

	public function findByValue($URI, $value)
	{
		if( ! $traces = $this->traces($URI)) return '!ERROR! -- Could Not Find Any Traces';

		return array_search($value, $traces);
	}

	public function deleteByValue($URI, $value)
	{
		if ( ! $this->deleteTrace($URI, $value) ) return 'Error Delting Key';

		return '--DELETED--';
	}

	private function traces($key)
	{
		if( $traces = Redis::LRANGE($this->namespace.'#'.$key, 0, -1) ) return array_reverse($traces);

		return false;
	}

	private function deleteTrace($key, $value)
	{

		if( ! Redis::LREM($this->namespace.'#'.$key, 0, $value) ) return false;

		return true;
	}

	private function calculate_apdex($traces)
	{
		$apdex = [

			'satisfactory'  => [],
			'tolerable'    => [],
			'frusturating' => [],
			'score'        => 0

		];

		foreach ( $traces as $trace ) {
			
			$time = (INT) $trace['time'];

			if ( $time < 1000 )
			{
				$apdex['satisfactory'][] = $trace;
			}

			if ( ($time >= 1000) && ($time <= 4000) )
			{
				$apdex['tolerable'][] = $trace;
			}

			if ( $time > 4000 )
			{ 
				$apdex['frusturating'][] = $trace;
			}

		}

		/*-----------------------------------------------------------------------------
		|                                APDEX G Specification
		|------------------------------------------------------------------------------
		|    [ APDEX Metrics Table ]
		|-------------------------------
		| T            |  1000ms       |
        |------------------------------- 
        | Satisfied    |    <= T       |
		|-------------------------------
		| Tolerated    |  >T, <= 4T    |
		|-------------------------------
		| Frusturated  |    >4T        |
		|-------------------------------
		|                                         Tolerated Count
        |                                     -----------------------
		|               Satisfied Count   +             2
		|   APDEX =   ——————————————————————------------------------------
        |                              Total Count
        |
        |
		|
		*/

		$apdex['stats']['satisfactory'] = count($apdex['satisfactory']) ? count($apdex['satisfactory']) : 0;

		$apdex['stats']['satisfactoryPct'] = ( $apdex['stats']['satisfactory'] / count($traces) ) * 100;

		$apdex['stats']['tolerable'] = count($apdex['tolerable']) ? count($apdex['tolerable']) : 0;

		$apdex['stats']['tolerablePct'] = ( $apdex['stats']['tolerable'] / count($traces) ) * 100;

		$apdex['stats']['frusturating'] = count($apdex['frusturating']) ? count($apdex['frusturating']) : 0;
		
		$apdex['stats']['frusturatingPct'] = ( $apdex['stats']['frusturating'] / count($traces) ) * 100;
		
		$apdex['stats']['total'] = count($traces);


		$satisfied = count($apdex['satisfactory']) ? count($apdex['satisfactory']) : 0;
		
		$tolerables = count($apdex['tolerable']) ? count($apdex['tolerable']) : 0;

        $apdex['score'] = ( ( $satisfied + ( $tolerables / 2 ) ) / count($traces) );

        if ( $apdex['score'] <= 0.5 ) $apdex['level'] = 'apdex-bad fa-frown-o';
        if ( ($apdex['score'] >= 0.5) && ($apdex['score'] <= 0.75) ) $apdex['level'] = 'apdex-average fa-meh-o';
        if ( $apdex['score'] > 0.75 ) $apdex['level'] = 'apdex-good fa-smile-o';

		$apdex['pct'] = ($apdex['score'] > 0 ? number_format( $apdex['score'] * 100 ) : 100);

		return $apdex;
	}

}