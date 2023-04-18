<?php
    
include ('config.php');

if(isset($_POST['save'])){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];

    $mysqli = ("INSERT INTO address('fname', 'email', 'phone_number') VALUES ('$fname', '$email', '$phone_number')");
  
  }

?>