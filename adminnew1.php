
<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<div class="auto-style2"> <br><br>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
function myFunction() {
    location.reload();
}
</script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<title>Generic - Spatial by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<style type="text/css">
		.auto-style2 {
			margin-left: 0px;
			text-align: center;
		}
		.auto-style3 {
			font-size: medium;
		}
		</style>
		</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1>Siri Info Solutions Inc</h1>

				<nav id="nav">
					<ul>
						<li><a href="HOME.html">Home</a></li>
						<li ><a href="logout.php">Log Out</a></li>
	
					</ul>
				</nav>
			</header>

<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="vidh"; // Mysql password 
$db_name="company"; // Database name 
$tbl_name="recruiter"; // Table name 

// Connect to server and select database.
@mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
@mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$username = array_key_exists('username', $_POST) ? $_POST['username'] : null;
$email = array_key_exists('email', $_POST) ? $_POST['email'] : null;
$contact = array_key_exists('contact', $_POST) ? $_POST['contact'] : null;
$address = array_key_exists('address', $_POST) ? $_POST['address'] : null;

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(username, password, email, contact, address)VALUES('$username', '$password', '$email', '$contact', '$address')";
$result=@mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){

 header("Location: readphp.php");
 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
 header("Location: readphp.php");
 }
?> 

<?php 
// close connection 
@mysql_close();
?>