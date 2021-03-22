<?php

namespace App\Core;

class Router
{
	public $request;
	
	public function __construct(Request $request)
	{
		$this->request = $request;
	}
	
	public function get($path, $callback)
	{
		$this->routes['get'][$path] = $callback;

	}
	
	public function resolve()
	{
		$path = $this->request->getPath();
		$method = $this->request->getMethod();
		$callback = $this->routes[$method][$path] ?? false;

		if($callback === false){
			return "not found";
		}
		
		return call_user_func($callback);
	}
}
