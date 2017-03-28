<?php

/* auto detect konfigurasi database */
if ($_SERVER['HTTP_HOST']!='localhost'){
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'wisnuhaf_db');
	define('DB_USER', 'wisnuhaf_user');
	define('DB_PASS', '(wnCT(9^}L]#^VA;u*');
} else {
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'latihan');
	define('DB_USER', 'root');
	define('DB_PASS', '');
}
