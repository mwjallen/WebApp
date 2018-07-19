<?php
session_start();
require_once ('./scripts/functions.php');
require_once ('./scripts/dbconn.php');
if (isset($_POST['lname']) && isset($_POST['fname']) && isset($_POST['addr1'])
	&& isset($_POST['city']) && isset($_POST['postcode']) && isset($_POST['phone'])
	&& isset($_POST['email'] )&& isset($_POST['password'])) {	
	addVolunteer($_POST['lname'], $_POST['fname'], $_POST['addr1'], $_POST['addr2'],
	 $_POST['city'], $_POST['postcode'], $_POST['phone'], $_POST['mobile'], $_POST['email'], $_POST['password'], $dbconn);
} else {
	header('Location:register.php');
	exit();
}
?>
