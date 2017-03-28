<?php

namespace Api\Core;

class App
{
	public function __construct(){
		$db = new Database;
		$db->init();
	}

	public function init()
	{
		if (!isset($_GET['url']))
		{
			Response::sent(400);
		} else {
			$url = filter_var($_GET['url'], FILTER_SANITIZE_URL);
			$url = trim($url, '/');
			$url = explode('/', $url);
			
			$class = '\Api\Controller\\' . ucwords($url[0]) . 'Controller';

			if (!class_exists($class))
			{
				Response::sent(400);
			} else {
				$controller = new $class;
				$request_method = strtolower($_SERVER['REQUEST_METHOD']);
				
				if (!method_exists($class, $request_method)){
					Response::sent(405);
				} else {
					if ( is_callable(array($controller, $request_method)) ){
						$controller->{$request_method}();
					} else {
						Response::sent(501);
					}
				}
			}
		}
	}

	public function uri_segment($index = 0)
	{
		if (isset($_GET['url']))
		{
			$url = filter_var($_GET['url'], FILTER_SANITIZE_URL);
			$url = trim($url, '/');
			$url = explode('/', $url);
			if (isset($url[$index])){
				return $url[$index];
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public function get_stream_data()
	{
		parse_str(file_get_contents("php://input"), $post_vars);
		return $post_vars;
	}
}