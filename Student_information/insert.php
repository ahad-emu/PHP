<?php include "db.php" ?>
<?php
if(isset($_POST["submit"])){
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $roll = $_POST["roll_no"];
    $sec = $_POST["section"];
    $first_name = mysqli_real_escape_string($connection, $first_name);
    $last_name = mysqli_real_escape_string($connection, $last_name);
    $sec = mysqli_real_escape_string($connection, $sec);
    $query = "INSERT INTO `Student_Information`(first_name, last_name, roll, sec) VALUES
                ('$first_name','$last_name','$roll','$sec')";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed". mysqli_error());
    }
}
 ?>
<html>
<head>
    <title>Student_Information_System</title>
    <style>
        form{
            width: 500px;
        }
        legend{
            text-align: center;
        }
    </style>
</head>

<body align="center">
    <form method="post" action="insert.php">
        <fieldset>
            <legend>Student_Information_System</legend>
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="first_name" required></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="last_name" required></td>
                </tr>
                <tr>
                    <td>Roll Number:</td>
                    <td><input type="number" name="roll_no" required></td>
                </tr>
                <tr>
                    <td>Section:</td>
                    <td><input type="text" name="section" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" name="submit">Submit</button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
