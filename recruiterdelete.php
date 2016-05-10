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
 <title>deletea record</title>
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
 <strong>username: *</strong> <input type="text" name="id" id="id"value="" /><br/>
 <p>* required</p>
 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
 </body>
 </html>

<?php
/* 
 DELETE.PHP
 Deletes a specific entry from the 'players' table
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
 $result = mysql_query("DELETE FROM recruiter WHERE id=$id")
 or die(mysql_error()); 
 
 // redirect back to the view page
 header("Location: admindelete.php");
 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
 header("Location: admindelete.php");
 }
 
?>