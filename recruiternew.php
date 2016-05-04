<?php
/* 
 NEW.PHP
 Allows user to create a new entry in the database
*/
 
 // creates the new record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($name, $password, $email, $contact, $address, $error)
{
}
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>New Record</title>
 </head>
 <body>
 <?php 
 $error = '';
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 
 <form action="" method="post">
 <div>
 <strong>username: *</strong> <input type="text" name="username" id="username"value="" /><br/>
<strong>Name: *</strong> <input type="password" name="password" id="password"value="" /><br/>
 <strong>email: *</strong> <input type="text" name="email" id="email"value="" /><br/>
 <strong>contact: *</strong> <input type="text" name="contact" id="contact"value="" /><br/>
 <strong>address: *</strong> <input type="text" name="address" id="address"value="" /><br/>

 <p>* required</p>
 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
 </body>
 </html>
 
 <?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="vidh"; // Mysql password 
$db_name="company"; // Database name 
$tbl_name="consultant"; // Table name 

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
echo "Successful";
echo "<BR>";
echo "<a href='recruiterreadphp.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
@mysql_close();
?>