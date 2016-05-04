<?php

    session_start();
    $hostname = 'localhost';
    $dbname   = 'imatrix';
    $username = 'root'; 
    $password = 'vidh';
    mysql_connect($hostname, $username, $password) or DIE('Connection to host isailed, perhaps the service is down!');
    mysql_select_db($dbname) or DIE('Database name is not available!');

    
    if ($rows==1) 
    {
        $_SESSION['userName'] = $_POST['username'];
        header("Location: securedpage.php");
    }
    else 
    {
        echo "user name and password not found";
        // TODO - replace message with redirection to login page
        //  header("Location: securedpage.php");
    }