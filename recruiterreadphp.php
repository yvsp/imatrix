<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<div class="auto-style2"> <br><br>
	<head>
		
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
        echo "list of consultants";
      $selected = mysql_select_db("company", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM consultant; ");
      ?>
      <table> 
      <thead>
        <tr align="center">
          <td><b>_id</b></td>
          <td><b>_name</b></td>
          <td><b>_email</b></td>
          <td><b>_contact</b></td>
          <td><b>address</b></td>
         
        </tr>
      </thead>    
      <tbody>
        <?php
          while( $row = mysql_fetch_assoc( $result)){
            echo
            "<tr>
              <td align='center'>{$row['id']}</td>
              <td align='center'>{$row['username']}</td>
              <td align='center'>{$row['email']}</td>
              <td align='center'>{$row['contact']}</td>
              <td align='center'>{$row['address']}</td>
              
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
    
    
    
    <p><a href="recruiternew.php">Add a new record</a></p>

    
    
    
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

