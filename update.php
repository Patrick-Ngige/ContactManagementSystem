<?php
// Include the database connection file
require_once("config.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$mysqli = mysqli_query($conn, "SELECT * FROM address WHERE id = $id");

// Fetch the next row of a result set as an associative array
$mysqliData = mysqli_fetch_assoc($mysqli);

$fname = $mysqliData['fname'];
$email = $mysqliData['email'];
$phone_number = $mysqliData['phone_number'];
?>
<html>
<head>	
	<title>Edit Data</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
	<div class="ml-96 mt-36 w-1/3 h-1/2 p-7 bg-gray-300 shadow-2xl rounded-md">
    <h2 class="p-2  font-bold text-xl ">Edit Data</h2>
	<form name="edit" method="post" action="" class="p-2">
		<table class="h-52">
			<tr > 
				<td class="p-2 font-medium ">Name :</td>
				<td><input type="text" name="fname" value="<?php echo $fname; ?>" class="p-1 rounded-sm"></td>
			</tr>
			<tr> 
				<td class="p-2 font-medium ">Email :</td>
				<td><input type="text" name="email" value="<?php echo $email; ?>" class="p-1 rounded-sm"></td>
			</tr>
			<tr> 
				<td class="p-2 font-medium ">Phone Number :</td>
				<td><input type="text" name="phone_number" value="<?php echo $phone_number; ?>" class="p-1 rounded-sm"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Update" class="w-28 bg-blue-600 ml-10 p-1 text-slate-100 font-semibold rounded-sm content-center" ></td>
				
               
			</tr>
		</table>
	</form>
	</div>


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
?>

</body>
</html>