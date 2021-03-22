<?php

namespace App\Core;

class Request
{
	public function getPath()
	{
		$path = $_SERVER['REQUEST_URI'] ?? '/';
		$query_string_start = strpos($path, '?');

		if($query_string_start !== false){
			$path = substr($path, 0, $query_string_start);
		}

		return $path;
	}

	public function getMethod()
	{
		return strtolower($_SERVER['REQUEST_METHOD']);
	}
}
