<?php 
	$bookID = $_POST['bookID'];
	$studentID = $_POST['studentID'];
	$issueDate = $_POST['issueDate']; 
	
	mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('library');
	
	$sql = "INSERT INTO issue_book VALUES (NULL,'$bookID','$studentID','$issueDate'); ";
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