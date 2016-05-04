<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php
include('recruiterlogin.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: recruiterprofile.php");
}
?>
<html>
	<head>
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
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<style type="text/css">
		.auto-style1 {
			margin-left:600px;
				}
		.auto-style2 {
			margin-left: 600px;
		}
		</style>
		</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1>Siri Info Solutions Inc</h1>

				<nav id="nav">
					<ul>
						<li><a href="home.html">Home</a></li>
						<li><a href="login.html">login</a></li>
						
					</ul>
				</nav>
			</header>
			
	<div class="body" align="center"></div>
		<div class="grad"></div>
		<div class="header">
			<div class="auto-style2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recruiter access</div>
		</div>
		<br>
		
<form action="" method="post">
    
    <div class="auto-style1">
				<table style="width: 20%; height: 185px" align="center">
					<tr>
						<td align="center">
				<label>UserName :</label> <input id="name" name="username" placeholder="username" type="text"style="width: 245px"></td>
					</tr>
					<tr>
						<td>
				<label>Password :</label><input type="password"  id="password" name="password" placeholder="**********" style="width: 242px"></td>
					</tr>
					<tr>
						<td align="center">
				<input name="submit" type="submit" value=" Login "></td>
					</tr>
				</table>
				<br>
				<br>
				&nbsp;</div>
				<span><?php echo $error; ?></span>
				</form>
    <script src='jquery.min.js'></script>

			
			<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"></a></li>
						<li><a href="#" class="icon fa-twitter"></a></li>
						<li><a href="#" class="icon fa-instagram"></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>

	</body>
</html>
