<?php
session_start();
include ('./scripts/functions.php');
include ('./scripts/dbconn.php');

if (!isset($_SESSION['admin_user'])) {
    header('Location: login.php');
} else {
	$message = '<span class="message">Welcome: ' . $_SESSION['admin_user']['name'] .' (Admin)</span>&nbsp;';
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
	<div>
		<h3>User administration - Overview</h3><br />
    </div>
	<section class="content">

        <div class="results">
        <h4>Active Members</h4>
        <?php
		$sql = 'SELECT * FROM member WHERE member_status = 1';
		$stmt = $dbconn->prepare($sql);
		$stmt->execute();
		//display the results
		echo '<table class=tblresults><th>User_id</th><th>First name</th><th>Last name</th><th>Phone</th><th>Renewal Date</th><th>Actions</th>';
		foreach ($stmt as $row){
			echo '<tr><td>' . $row['member_id'] . '</td><td>' . $row['member_fname'] . '</td><td>' . $row['member_lname'] . '</td><td>'  .$row['member_phone'] . '</td><td>' . date("d/m/Y",strtotime($row['member_renewal_date'])) . '</td><td><a href="update.php?user_id='.$row['member_id']. '">Update >></a></td><td><a href="read.php?user_id?='.$row['member_id']. '">Read >></a></td><td><a href="delete.php?user_id?='.$row['member_id']. '" style="color:red;color=#FFF;">Delete >></a></td></tr>';
		}
		echo'</table><hr>';							
		?>
        </div>
     </section>
     <section>   
        <div class="results">
        <h4>Unpaid Fees/Membership cancelled</h4>
        <?php
		$sql = 'SELECT * FROM member WHERE member_status = 0';
		$stmt = $dbconn->prepare($sql);
		$stmt->execute();
		//display the results
		echo '<table class=tblresults><th>User_id</th><th>First name</th><th>Last name</th><th>Phone</th><th>Renewal Date</th><th>Actions</th>';
		foreach ($stmt as $row){
			echo '<tr><td>' . $row['member_id'] . '</td><td>' . $row['member_fname'] . '</td><td>' . $row['member_lname'] . '</td><td>'  .$row['member_phone'] . '</td><td>' . date("d/m/Y",strtotime($row['member_renewal_date'])) . '</td><td><a href="update.php?user_id='.$row['member_id']. '">Update >></a></td><td><a href="read.php?user_id?='.$row['member_id']. '">Read >></a></td><td><a href="delete.php?user_id?='.$row['member_id']. '" style="color:red;color=#FFF;">Delete >></a></td></tr>';
		}
		echo'</table><hr>';
		?>        
	</div>
	</section>
<?php echo $closingHtmlString = '</body><hr><footer><p>&copy; JacknJill Health Club.  All rights reserved.</p></footer></html>'; ?>
</div>
