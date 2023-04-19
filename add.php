<!DOCTYPE html>
<html lang="en">
<head>
    
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="ml-96 mt-66">
    <form action="addQuery.php" method="post" >
		<table class="w-12 bg-slate-400" >
			<tr> 
				<td class="p-2">Name</td>
				<td class="p-2"><input type="text" name="fname" class="p-0.5"></td>
			</tr>
			<tr> 
				<td class="p-2">email</td>
				<td class="p-2"><input type="email" name="email" class="p-0.5"></td>
			</tr>
			<tr> 
				<td class="p-2">Phone_number</td>
				<td class="p-2"><input type="number" name="phone_number" class="p-0.5"></td>
			</tr>
			<tr> 
				<td class="p-2"></td>
				<td class="p-2"><input type="submit" name="save" value="Add" class="bg-blue-500 w-28 ml-8 text-slate-50 font-semibold"></td>
			</tr>
		</table>
	</form>

	</div>

</body>
</html>