<html>
	<head>
		<title>Home</title>
	</head>
	<body> 
		<h1 align="center">Book Issue List</h1>
		<table border="1" width="100%">
			<thead>	
				<tr>
					<th>ID</th>
					<th>BookID</th>
					<th>StudentID</th>
					<th>Issue Date</th>
				</tr>
			</thead>
			<body>
<?php 
	mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('library');
	
	$sql = "SELECT * FROM issue_book; ";
	$query = mysql_query($sql) or die(mysql_error());
	
	while($row = mysql_fetch_object($query)){
		echo "<tr>
				<td> $row->issueID </td>
				<td> $row->bookID </td>
				<td> $row->studentID </td>
				<td> $row->issueDate </td>
			</tr>";
	}
				
?>
			</body>
			
		</table>
		
	</body>
</html>