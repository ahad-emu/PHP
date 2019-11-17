<html>
	<head>
		<title>Home</title>
	</head>
	<body> 
		<h1 align="center">Book List</h1>
		<table border="1" width="100%">
			<thead>	
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Writer</th>
					<th>Quantity</th>
				</tr>
			</thead>
			<body>
<?php 
	mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('library');
	
	$sql = "SELECT * FROM book; ";
	$query = mysql_query($sql) or die(mysql_error());
	
	while($row = mysql_fetch_object($query)){
		echo "<tr>
				<td> $row->bookID </td>
				<td> $row->title </td>
				<td> $row->writer </td>
				<td> $row->quantity </td>
			</tr>";
	}
				
?>
			</body>
			
		</table>
		
	</body>
</html>