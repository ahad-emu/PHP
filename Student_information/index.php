<?php include "db.php" ?>
<html>
<head>
    <title>Student_Information_System</title>
    <style>
        #one, #two, #three, #four{
            margin:5px 25px 0 0;
            height: 25px;
            width: 90px;
        }
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h2 align="center">Student_Information_System</h2>
	<hr/>
	 <a href="display.php"><input type="submit" name="add_button" value="DISPLAY" id="four"></a>
     <a href="insert.php"><input type="submit" name="add_button" value="ADD" id="one"></a>
     <a href="delete.php"><input type="submit" name="add_button" value="DELETE" id="two"></a>
     <a href="update.php"><input type="submit" name="add_button" value="UPDATE" id="three"></a>
</body>
</html>
