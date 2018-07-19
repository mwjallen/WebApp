<?php
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
						<li class="active"><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>
				</div>
			</div>                
		</nav>
	</div>
	
	<div>
		<center><form class="register" action="checkregister.php" method="post">
		<h3>Please Sign Up</h3>
        <hr class="colorgraph"><br />
        	<div class="row">
            	<div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control input-sm " id="fname" name="fname" required placeholder="First Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control input-sm" id="lname" name="lname" required placeholder="Last Name">
                    </div> 
                </div> 
            </div>
            
                <div class="form-group">
                    <input type="text" class="form-control input-sm" id="addr1" name="addr1" required placeholder="Address Line 1">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-sm" id="addr2" name="addr2" placeholder="Address Line 2">
                </div>
                
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control input-sm" id="city" name="city" required placeholder="City">
                    </div>
                </div>     
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control input-sm" id="postcode" name="postcode" required placeholder="Postcode">
                    </div>
                </div>
            </div>
                
        	<div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control input-sm" id="phone" name="phone" required placeholder="Phone">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control input-sm" id="mobile" name="mobile" placeholder="Mobile">
                    </div>
                 </div>
                 </div>
                <div class="form-group">
                    <input type="email" class="form-control input-sm" id="email" name="email" required placeholder="Email address">
                </div>
                <div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					 By clicking <strong class="label label-primary">Submit</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
				</div>
			</div>
                <hr class="colorgraph"><br />
                <div class="text-center">
                <button type="submit" class="btn btn-primary btn-md active" >Submit</button>
                </div>
		</form>
        </center>
	</div>
    <?php echo $closingHtmlString = '</body><hr><footer><p>&copy; JacknJill Health Club.  All rights reserved.</p></footer></html>'; ?>
 </div>

