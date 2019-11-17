<?php include "db.php" ?>
<html>
<head>
    <title>Result Processing Sytem</title>
    <style>
    #one,#two, #three{
        height: 30px;
        margin:  0 0 0 50px;
        background-color: white;
        color:black;
    }
    a{
        text-decoration: none;
    }
    </style>
</head>
<body align="center">
    <h1 align="center">Result Processing System</h1>
    <hr/>
    <button type="submit"  id="one"><a href="insert.php" style="color:black;">ADD_RESULT</a></button>
    <button type="submit"  id="two"><a href="display.php" style="color:black;">SHOW-ALL-RESULT</a></button>
    <button type="submit"  id="three"><a href="search.php" style="color:black;">SEARCH-INDIVIDUAL_RESULT</a></button>
</body>
</html>
