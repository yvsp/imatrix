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
$password = array_key_exists('password', $_POST) ? $_POST['password'] : null;

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