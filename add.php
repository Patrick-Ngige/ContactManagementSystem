<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Management system</title>
</head>
<body>
    
    <form action="addQuery.php" method="post" >
		<table width="50%" border='0' >
			<tr> 
				<td>Name</td>
				<td><input type="text" name="fname"></td>
			</tr>
			<tr> 
				<td>email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr> 
				<td>Phone_number</td>
				<td><input type="number" name="phone_number"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="save" value="Add"></td>
			</tr>
		</table>
	</form>


</body>
</html>