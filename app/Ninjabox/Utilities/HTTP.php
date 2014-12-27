<?php namespace Ninjabox\Utilities;

use Response;
use Redis;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class HTTP { // MAYBE YOU SHOULD USE A NEW CLASS??

	protected $namespace = 'NINJABOX::Traces';
	protected $log;
	protected $time;

	public function Trace($URI)
	{
		return $this->Log( $this->Hit($URI) );
	}

	public function Hit($URI)
	{	
		$this->time = microtime(true); // Check if guzzle has response time

		$client = new \Guzzle\Service\Client();

		$response = $client->get($URI)->send();

		if ( $response->getStatusCode() != 200 ) return '!Error Hitting Endpoint!';

		$data = $response->json();

		return array(

			'resource' => $URI,
			'data'     => $data['message'], 
			'time'     => floor((microtime(true) - $this->time) * 1000)

		);
	}

	private function Log($trace)
	{
		$traceLog = new Logger('Trace Log');
		$traceLog->pushHandler(new StreamHandler( __DIR__.'/../Logs/trace.log', Logger::INFO));

		$traceLog->addInfo('['.$trace['resource'].'] =-=-= ^traced^ =-=-= ', array('response_time' => $trace['time']));

		$this->Store($trace);

		return $trace;
	}

	private function Store($trace)
	{
		// MOVE STORE TO TRACE CLASS

		Redis::lpush($this->namespace.'#'.$trace['resource'], time().':'.$trace['time']);
	}
}