<?php

namespace Api\Controller;

use Api\Core\Response;

class BaseController extends \Api\Core\App
{
	public function __call($name, $arguments)
	{
		Response::sent(501);
	}
}