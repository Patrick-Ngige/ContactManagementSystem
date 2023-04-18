<html>
<head>
	<title>Add Data</title>
</head>

<body>

<?php
    
include ('config.php');

if(isset($_POST['save'])){
    $fname = ($_POST['fname']);
    $email = ($_POST['email']);
    $phone_number = ($_POST['phone_number']);


  // Check for empty fields
	if (empty($fname) || empty($email) || empty($phone_number)) {
		if (empty($fname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if (empty($phone_number)) {
			echo "<font color='red'>Phone_number field is empty.</font><br/>";
		}
		
		// Show link to the previous page
		header("Location : index.php");
	} else { 
    
		// If all the fields are filled (not empty)
    $mysqli = mysqli_query($conn, "INSERT INTO address(fname, email, phone_number) VALUES ('$fname', '$email', '$phone_number')");
			// Redirect to the main display page 
				header("Location:index.php");
  }
}
?>

</body>
</html>