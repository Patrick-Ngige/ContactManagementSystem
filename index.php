<?php
// Include the database connection file
require_once("config.php");

// Fetch data in descending order 
$mysqli = mysqli_query($conn, "SELECT * FROM address ORDER BY id DESC");
?>

<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Management system</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body><div class="w-2/3 p-20 ml-48 mt-16   bg-gray-300 rounded-lg shadow-2xl ">
	<h2 class="text-3xl font-bold text-center pb-8">Contact Management System</h2>
	<p>
		<a href="add.php" class="text-lg py-2 text-green-600 ml-20 font-bold p-3">Add Data</a>
	</p>
	<table width='80%' class=" ml-20 ">
		<tr >
			<td class="p-4"><strong>Name</strong></td>
			<td class="p-4"><strong>Email</strong></td>
			<td class="p-4"><strong>Phone_number</strong></td>
			<td class="p-4"><strong>Operation</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($mysqli)) {
			echo "<tr>";
			echo "<td class='p-4'>" . $res['fname'] . "</td>";
			echo "<td class='p-4'>" . $res['email'] . "</td>";
			echo "<td class='p-4'>" . $res['phone_number'] . "</td>";
			echo "<td class='p-4 '><a href=\"update.php?id=$res[id]\" class='text-blue-600 hover:w-full'>Edit</a> | 
			<a href=\"delete.php?id=$res[id]\" class='text-red-600'>Delete</a></td>";
		}
		?>
	</table>
	</div>
</body>

</html>