<?php

namespace App\Command;

use App\Services\RequestService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RequestCommand extends Command
{
    public $requestService;

	public function __construct( RequestService $requestService )
	{
		parent::__construct();
		$this->requestService = $requestService;
	}
	
	protected function configure()
	{
		
		$this
			->setName( 'app:request' )
			->setDescription( 'Launch request' )
		;
	}
	
	protected function execute( InputInterface $input, OutputInterface $output )
	{
	    $phone = $input->getArgument('phone');

		$responseBody = $this->requestService->get($phone);

		var_dump($responseBody);
	}
	
}
