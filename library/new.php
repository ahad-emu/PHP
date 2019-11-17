<html>
	<head>
		<title>Add New Book </title>
	</head>
	<body>
		<h1 align="center">Add New Book </h1>
		
		<form method="post" action="save.php">
			<table>
			<tr>
				<td>Title: </td>
				<td><input type="text" name="title" /></td>
			</tr>
			
			<tr>
				<td>Writer: </td>
				<td><input type="text" name="writer" /></td>
			</tr>
			<tr>
				<td>Quantity: </td>
				<td><input type="text" name="quantity" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit" /></td>
			</tr>  
			
		</form>
	</body>
</html>