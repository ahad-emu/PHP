<html>
	<head>
		<title>Home</title>
	</head>
	<body> 
		<h1 align="center">Returned Book List</h1>
		<table border="1" width="100%">
			<thead>	
				<tr>
					<th>Issue ID</th>
					<th>Issue Date</th>
					<th>Student ID</th>
					<th>Return Date</th>
				</tr>
			</thead>
			<tbody align="center">
<?php 
	mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('library');
	
	$sql = "SELECT * FROM return_book LEFT JOIN issue_book ON return_book.issueID = issue_book.issueID; ";
	$query = mysql_query($sql) or die(mysql_error());
	
	while($row = mysql_fetch_object($query)){
		echo "<tr>
				<td> $row->issueID </td>
				<td> $row->issueDate </td>
				<td> $row->studentID </td>
				<td> $row->returnDate </td>
			</tr>";
	}
				
?>
			</tbody>
			
		</table>
		
	</body>
</html>