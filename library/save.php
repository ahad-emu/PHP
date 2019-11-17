<?php 
	$title = $_POST['title'];
	$writer = $_POST['writer'];
	$quantity = $_POST['quantity']; 
	
	mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('library');
	
	$sql = "INSERT INTO book VALUES (NULL,'$title','$writer','$quantity'); ";
	$query = mysql_query($sql) or die(mysql_error());
	
	if($query)
		echo '<h1>Successfully Saved.</h1>';
	else 
		echo '<h1>Failed to save! </h1>';

?>
<p align="center">
	<a href="new.php"> Add new book</a> | 
	<a href="list.php"> Book List</a> | 
	<a href="issue.php"> Issue book</a> | 
	<a href="return.php"> Return book</a>  
</p>