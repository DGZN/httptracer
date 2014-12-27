<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

use Indatus\Dispatcher\Scheduling\ScheduledCommand;
use Indatus\Dispatcher\Scheduling\Schedulable;
use Indatus\Dispatcher\Drivers\Cron\Scheduler;

use Ninjabox\Utilities\HTTP;

class ScheduledEndpointTracerCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'run-traced';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Run Scheduled Enpoint Traces';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	public function user()
	{
		return 'DIGIAIR';
	}

	/**
	 * When a command should run
	 *
	 * @param Scheduler $scheduler
	 * @return \Indatus\Dispatcher\Scheduling\Schedulable
	 */
	public function schedule(Schedulable $scheduler)
    {
        //every day at 4:17am
        return $scheduler
            ->daily()
            ->minutes(1);
    }

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$endpoints = new Endpoint;

		$this->info('::NINJABOX ENDPOINT TRACER::');
		$this->info('', true);

		foreach ( $endpoints::all() as $endpoint) {
			
			$HTTP = new HTTP;
			$trace = $HTTP->Trace( $endpoint->URI);
			$this->info( $endpoint->name . ' ^~^ ' . $endpoint->URI . ' ^~^', true);
			$this->error('Traced: __'.$trace['time'].'ms__', true);
			$this->info('-----------------------------------',true);
			$this->info('',true);

		}

	}

	// /**
	//  * Get the console command arguments.
	//  *
	//  * @return array
	//  */
	// protected function getArguments()
	// {
	// 	return array(
	// 		array('all', InputArgument::REQUIRED, 'Traces all scheduled enpoints'),
	// 	);
	// }

	// /**
	//  * Get the console command options.
	//  *
	//  * @return array
	//  */
	// protected function getOptions()
	// {
	// 	return array(
	// 		array('list', null, InputOption::VALUE_OPTIONAL, 'Lists scheduled endpoints', null),
	// 	);
	// }

}
