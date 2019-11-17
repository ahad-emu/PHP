<html>
	<head>
		<title>Return Book </title>
	</head>
	<body>
		<h1 align="center">Return Book </h1>
		
		<form method="post" action="save_return.php">
			<table>
			<tr>
				<td>Issue ID: </td>
				<td><input type="number" name="issueID" /></td>
			</tr>
			<tr>
				<td>Return date: </td>
				<td><input type="date" name="returnDate" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit" /></td>
			</tr>  
			
		</form>
	</body>
</html>