<?php
// Include the database connection file
require_once("config.php");

// Fetch data in descending order 
$mysqli = mysqli_query($conn, "SELECT * FROM address ORDER BY id DESC");
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
	<h2>Homepage</h2>
	<p>
		<a href="add.php">Add New Data</a>
	</p>
	<table width='80%' >
		<tr>
			<td><strong>Name</strong></td>
			<td><strong>Email</strong></td>
			<td><strong>Phone_number</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($mysqli)) {
			echo "<tr>";
			echo "<td>".$res['fname']."</td>";
			echo "<td>".$res['email']."</td>";
			echo "<td>".$res['phone_number']."</td>";	
			echo "<td><a href=\"update.php?id=$res[id]\">Edit</a> | 
			<a href=\"delete.php?id=$res[id]\">Delete</a></td>";
		}
		?>
	</table>
</body>
</html>