<?php
session_start();
require_once ('./scripts/functions.php');
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
						<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						<li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>
				</div>
			</div>                
		</nav>
	</div>

	<div>
		<center><form class="login" action="checklogin.php" method="post">
		<h3>Please login:</h3>
        <hr class="colorgraph"><br />
		  <div class="input-group" >
			<span class="input-group-addon"><i class="glyphicon glyphicon-user" ></i></span>
			<input id="userid" type="text" class="form-control input" name="userid" placeholder="User Id" required>
		  </div>&nbsp;
		   <div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			<input id="password" type="password" class="form-control input" name="password" placeholder="Password" required>
		  </div>
        <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12">
             &nbsp;
             </div>
        </div> 
        <hr class="colorgraph">
        <div class="row">
             <div class="col-xs-4 col-sm-4 col-md-4">
		  		<div class="checkbox">
					<label><input type="checkbox"> Remember me</label>
		  		</div>
             </div>
             <div class="col-xs-4 col-sm-4 col-md-4">
                <div>
				<button type="submit" name="submit" class="btn btn-primary btn-md active">Submit</button>
             	</div>
              </div>
        	<div class="col-xs-4 col-sm-4 col-md-4">
            &nbsp;
            </div>
        </div>
		</form></center>
	</div>
	<br><br><br><br><br><br><br><br><br><br>
    
<?php echo $closingHtmlString = '</body><hr><footer><p>&copy; JacknJill Health Club.  All rights reserved.</p></footer></html>'; ?>
</div>