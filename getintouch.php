<?php 
include ('validation.php');
?>
<!DOCTYPE HTML>
<html>
<head>		<title>Siri info solutions Inc.</title>
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
		
		
		
			



	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1>Siri Info Solutions Inc</h1>				<nav id="nav">
					<ul>
						<li><a href="home.html">Home</a></li>
						<li><a href="login.html">Login</a></li>
						
					</ul>
				</nav>
			</header>
			
			
	

<body>

		<!-- Main -->
			<!-- Form -->
						<section>
						<div class="container">
							<h3>Form</h3>
							<form method="post" action="getintouch.php">
							<table><tr>
								<div class="row uniform 50%">
								<tr>
									<div class="6u 12u$(xsmall)">
										<label>Name :</label>
<input class="input" type="text" name="name" value="">
<span class="error"><?php echo $nameError;?></span>								</div>
									</tr><br/>
									<tr><div class="6u$ 12u$(xsmall)">
										<label>Email :</label>
<input class="input" type="text" name="email" value="">
<span class="error"><?php echo $emailError;?></span>									</div></tr><br/>
									<tr>
									<label>Purpose :</label>
<input class="input" type="text" name="purpose" value="">
<span class="error"><?php echo $purposeError;?></span>
									</tr><br/>
								<tr>
								
								<label>Message :</label><div class="12u$">

<textarea name="message" val="" placeholder="Enter your message" rows="6"></textarea>
<span class="error"><?php echo $messageError;?></span>
										</div>							
									</tr>
									<tr>
									<div class="12u$">
										<ul class="actions">
<input class="submit" type="submit" name="submit" value="Submit">
<span class="success"><?php echo $successMessage;?></span>
											
										</ul>
									</div></tr>
								</div>
								</table>
							</form>
						</section>

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