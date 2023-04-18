<?php 

    $server = 'localhost';
    $dbname = 'information';
    $username = 'root';
    $password = '';

    $conn =new mysqli($server, $username, $password, $dbname ) or die("Connection failed: " .mysqli_connect_error());
?>