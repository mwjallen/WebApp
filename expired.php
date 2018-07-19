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
						
					</ul>
				</div>  
			</div>              
		</nav>            
	</div>
    <div class="sidebar">
        <p>Follow us on:</p>
        <img src="images/twitter.png" alt="Twitter" title="Twitter">
        <img src="images/facebook.png" alt="Facebook" title="Facebook">
    </div>
<section class="content">
    <article class="newflex">
        <div class="content">
            <div class="col_left">
                <article>
                  <h1>Membership</h1>
                  <p>
                    <?php 
                        if (!isset($_SESSION['std_user']['status']) == 0) {
                            echo '<p><span class="error">Unfortunately, '.$_SESSION['std_user']['name'].', your membership has expired!</span></p>';
                            session_destroy();
                        }
                    ?>
                    </p><br />
                </article>
            </div>
            <div class="col_right">
                <article>
                  <h1>Renewal</h1>
                  <p>If you believe this is in error or would like to renew your membership, please contact our sales team on 01384 555222 or email  <a href="mailto:sales@jacknjill.com?Subject=Membership" target="_top">sales@jacknjill.com</a>. Membership is subject to our terms and conditions.  Thank you</p>
    
                </article>
            </div>
        </div>
    </article>
</section>
<?php echo $closingHtmlString = '</body><hr><footer><p>&copy; JacknJill Health Club.  All rights reserved.</p></footer></html>'; ?>
</div>






