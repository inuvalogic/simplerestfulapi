<?php

namespace Api\Core;

use Api\Core\Header;

class Response
{
	public static function sent($code = 200, $data = array(), $return = false)
	{
		Header::init($code);

		if (!is_array($data)){
			Header::init(400);
		}

		$data['http'] = Header::getStatusData();

		header('Content-type: application/json');
		
		$output = json_encode($data);

		if ($return==true){
			return $output;
		} else {
			echo $output;
		}
	}
}