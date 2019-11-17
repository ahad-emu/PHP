<html>
	<head>
		<title>Issue Book </title>
	</head>
	<body>
		<h1 align="center">Issue Book </h1>
		
		<form method="post" action="save_issue.php">
			<table>
			<tr>
				<td>Book ID: </td>
				<td><input type="number" name="bookID" /></td>
			</tr>
			
			<tr>
				<td>Student ID: </td>
				<td><input type="number" name="studentID" /></td>
			</tr>
			<tr>
				<td>Issue date: </td>
				<td><input type="date" name="issueDate" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit" /></td>
			</tr>  
			
		</form>
	</body>
</html>