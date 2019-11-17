<?php include "db.php" ?>
<html>
<head>
    <title>Employee_Information_System</title>
    <style>
        #one, #two{
            margin:5px 50px 0 0px;
            height: 25px;
            width: 90px;
        }
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h2 align="center">Employee_Information_System</h2>
	<hr/>
    <a href="insert.php"><input type="submit" name="add_button" value="ADD" id="one"></a>
	<a href="display.php"><input type="submit" name="add_button" value="DISPLAY" id="two"></a>
</body>
</html>
