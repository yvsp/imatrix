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



<?php
      $username = "root";
      $password = "vidh";
      $host = "localhost";

      $connector = @mysql_connect($host,$username,$password)
          or die("Unable to connect");
        echo "<h3 align='center'>List of Recruiters</h3>";
      $selected = mysql_select_db("company", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM recruiter; ");
      ?>
     
<div class="container">
<br/>
      <table class="table">
    <thead>
      <tr class="info">
        <td align="center" class="auto-style3"><strong><em>_name</em></strong></td>
        <td align="center"><strong><em>_email</em></strong></td>
        <td align="center"><strong><em>_contact</em></strong></td>
        <td align="center">_<strong><em>address</em></strong></td>
         <td align="center" color="red"><strong><em>delete</em></strong></td>

      </tr>
    </thead>    
      <tbody>
        <?php
          while( $row = mysql_fetch_assoc( $result)){
          $link="admindelete.php?id=".$row['id'];

            echo
            "<tr>
              	
              <td align='center'>{$row['username']}</td>
              <td align='center'>{$row['email']}</td>
              <td align='center'>{$row['contact']}</td>
              <td align='center'>{$row['address']}</td>
              <td align='center'><a href=$link>delete</a></td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
    
    
    
    <br/><br/><br/>
    
    <p>
    <div data-role="main" class="ui-content">
    <a href="#myPopup" data-rel="popup" >add a new record</a>

    <div data-role="popup" id="myPopup" class="ui-content" style="min-width:350px;" align="left">
      <form method="post" action="adminnew1.php">
        <div>
          <h3>Add new Recruiter</h3>
          <label for="usrnm" class="ui-hidden-accessible">Username:</label>
          <input type="text" name="username" id="username" placeholder="Username" value="">
          
          <label for="pswd" class="ui-hidden-accessible">Password:</label>
          <input type="password" name="password" id="password" placeholder="Password" value="">
          
          <label for="email" class="ui-hidden-accessible">Email:</label>
          <input type="text" name="email" id="email" placeholder="email" value="">
          
          <label for="contact" class="ui-hidden-accessible">Contact:</label>
          <input type="text" name="contact" id="contact" placeholder="phone number" value="">

          <label for="address" class="ui-hidden-accessible">Address:</label>
          <input type="text" name="address" id="address" placeholder="address" value="">

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" data-inline="true" value="Submit" >
        </div>
      </form>
    </div>
  </div></p>

    
    
    
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

