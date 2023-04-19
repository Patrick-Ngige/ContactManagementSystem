<!DOCTYPE html>
<html lang="en">
<head>
    
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="ml-96 mt-28 w-96 h-4/5 p-7  bg-gray-300 shadow-2xl rounded-md">
		<h2 class="text-center text-xl font-semibold">Add Contact Details</h2>
    <form action="" method="post" class=" " >
		<table class="  h-72" >
			<tr> 
				<td class="p-2 font-medium ">Name :</td>
				<td class="p-2"><input type="text" name="fname" class="p-0.5 rounded-sm"></td>
			</tr>
			<tr> 
				<td class="p-2 font-medium">email :</td>
				<td class="p-2"><input type="email" name="email" class="p-0.5 rounded-sm"></td>
			</tr>
			<tr> 
				<td class="p-2 font-medium ">Phone_number:</td>
				<td class="p-2"><input type="number" name="phone_number" class="p-0.5 rounded-sm"></td>
			</tr>
			<tr> 
				<td class="p-2 "></td>
				<td class="p-2"><input type="submit" name="save" value="Add" class="bg-blue-500 w-28 ml-8 text-slate-50 font-semibold rounded-sm"></td>
			</tr>
		</table>
	</form>

	</div>

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