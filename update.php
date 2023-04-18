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
</head>

<body>
    <h2>Edit Data</h2>
    <p>
	    <a href="index.php">Home</a>
    </p>
	
	<form name="edit" method="post" action="updateQuery.php">
		<table >
			<tr> 
				<td>Name</td>
				<td><input type="text" name="fname" value="<?php echo $fname; ?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
			</tr>
			<tr> 
				<td>Phone Number</td>
				<td><input type="text" name="phone_number" value="<?php echo $phone_number; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Update" ></td>
				
               
			</tr>
		</table>
	</form>
</body>
</html>