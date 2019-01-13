<?php
	//database connection settings

	define('DB_HOST', 'localhost'); // database host
	define('DB_USER', 'popgrafi_pg'); // username
	define('DB_PASS', 'pg'); // password
	define('DB_NAME', 'popgrafi_distro'); // database name
	define('ADMIN_LOGIN', 'YWRtaW4='); //administrator's login
	define('ADMIN_PASS', '81dc9bdb52d04dc20036dbd8313ed055'); //administrator's login

	//database tables
	include("./cfg/tables.inc.php");

?>