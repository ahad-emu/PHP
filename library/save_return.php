<?php  
	$issueID = $_POST['issueID'];
	$returnDate = $_POST['returnDate']; 
	
	mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('library');
	
	$sql = "INSERT INTO return_book VALUES (NULL,'$issueID','$returnDate'); ";
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
	<a href="issue_list.php"> Issued book List</a> | 
	<a href="return.php"> Return book</a>  
</p>