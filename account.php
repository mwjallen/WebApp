<?php
session_start();
require_once ('./scripts/functions.php');
if (!isset($_SESSION['std_user'])) {
    header('Location: login.php');
}else{
    $message = '<span class="message">Welcome: ' . $_SESSION['std_user']['name'] . ' (Member)</span>&nbsp;';
}

$htmlString = '<!doctype html><html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
	<link rel="stylesheet" href="css/main.css" type="text/css" >
	<title>JacknJill Health Club</title>
	</head><body>';
	echo $htmlString;
?>
<div class="container">
    <header>
    <img src="images/banner.png" alt="Jack and Jim's Health Club" title="Jack and Jim's Health Club" >
    </header>

	<div>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="index.html">Home</a></li>
						<li><a href="facilities.html">Facilities</a></li> 
						<li><a href="programmes.html">Programmes</a></li>  
						<li><a href="memberships.html">Memberships</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">         
						<li class="active"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
				</div>  
            <?php echo '<span id="user" class="navbar-right">' . $message .'</span>'; ?>
			</div>              
		</nav>
                
	</div>

	<section class="content">
	<div class="row">		
		<div class="col-md-4">
			<div>
				<div class="caption">  
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div>
				<img src="images/under-construction-homer.jpg" class="img-rounded" style="width:100%">
				<div class="caption">
				   <br><p>This is the members's account page</p> 
				</div>
			</div>
		</div>
			<div class="col-md-4">
				<div>
					<div class="caption">  
				</div>
			</div>
		</div>
	</div>
	</section>


<?php echo $closingHtmlString = '</body><hr><footer><p>&copy; JacknJill Health Club.  All rights reserved.</p></footer></html>'; ?>
</div>