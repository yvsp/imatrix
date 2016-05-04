<?php
if(isset($_POST['submit'])) 
{ 
    $name = $_POST['name'];
    echo "User Has submitted the form and entered this name : <b> $name </b>";
    ?>