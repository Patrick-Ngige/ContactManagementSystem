<?php
// Include the database connection file
require_once("config.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = ($_POST['id']);
	$fname = ($_POST['fname']);
	$email = ($_POST['email']);	
	$phone_number = ($_POST['phone_number']);
	
	// Check for empty fields
	if (empty($fname) || empty($email) || empty($phone_number)) {
		if (empty($fname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($email)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if (empty($phone_number)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
	} else {
		// Update the database table
		$mysqli = mysqli_query($conn, "UPDATE address SET `fname` = '$fname', `email` = '$email', `phone_number` = '$phone_number' WHERE `id` = $id");
		
	 }
	  
			// Redirect to index.html
			header("Location:index.php");
			exit();
}
