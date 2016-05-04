<?php
/*
Author: Javed Ur Rehman
Website: https://htmlcssphptutorial.wordpress.com
*/
?>

<?php
$connection = mysqli_connect('localhost', 'root', 'vidh');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
bool mysqli::select_db ( string $imatrix );

if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
?>