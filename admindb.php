
<?php

//echo "came in";
// define variables and set to empty values
$adminid =$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $adminid = ($_POST["adminid"]);
  $password = ($_POST["password"]);
 //echo $name.$mname.$lname.$sid.$email.$password.$gender.$note.$bday;
}

$servername = "localhost:81";
$username = "root";
$password = "";
$dbname = "imatrix";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (adminid, password,)VALUES 
('$adminid', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Data succesfully inserted check db......or go back for another insertion";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
