<?php

?>

<?php

php_value display_errors 1
/* 
 DELETE.PHP
 Deletes a specific entry from table
*/

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="vidh"; // Mysql password 
$db_name="company"; // Database name 
$tbl_name="consultant"; // Table name 

// Connect to server and select database.
@mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
@mysql_select_db("$db_name")or die("cannot select DB");
 
 // check if the 'id' variable is set in URL, and check that it is valid
 if (isset($_GET['id']) && is_numeric($_GET['id']))
 {
 // get id value
 $id = $_GET['id'];
 
 // delete the entry
 $result = mysql_query("DELETE FROM consultant WHERE id=$id")
 or die(mysql_error()); 
 
 // redirect back to the view page
 header("Location: recruiterreadphp.php");
 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
 header("Location: recruiterreadphp.php");
 }
 
?>

