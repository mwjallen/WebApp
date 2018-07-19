<?php
//display all php errors
error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', 'On');
//setup connection details
$user = 'root';
$pass = 'password';
$charset = 'utf8';
$dsn = 'mysql:host=localhost;dbname=jacknjill;charset=$charset';
$opt = array(
		PDO::ATTR_ERRMODE				=>PDO::ERRMODE_EXCEPTION, 
		PDO::ATTR_DEFAULT_FETCH_MODE	=>PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES 		=> TRUE,);
$dbconn = new PDO($dsn,$user,$pass,$opt);
?>
