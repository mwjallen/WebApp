<?php
session_start();
require_once ('./scripts/functions.php');
require_once ('./scripts/dbconn.php');
if(isset($_POST['userid']) && isset($_POST['password'])){
	validate_user($_POST['userid'], $_POST['password'], $dbconn);
} else {
	//header('Location:login.php');
	$myurl = 'Location:login.php';
	echo '<script type="text/javascript">window.top.location.href = "'. $myurl .'";</script>';
	exit();
}
?>
