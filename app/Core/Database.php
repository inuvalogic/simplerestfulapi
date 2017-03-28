<?php

namespace Api\Core;

use Api\Core\Header;
use \PDO;

class Database
{
	public static $pdo;

	public function init()
	{
		try {
			self::$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS, array(
				PDO::ATTR_PERSISTENT => true
			));
			self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(\PDOException $e){
			Header::sent(503);
			exit;
		}
	}
}
