<?php

namespace App\Core;

class Application
{
	public $router;
	public $request;
	public $response;

	public function __construct()
	{
		$this->request = new Request();
		$this->router = new Router($this->request);
	}

	public function run()
	{
		echo $this->router->resolve();
	}
}
