<?php include "db.php" ?>
<?php
if(isset($_POST["submit"])){
    $employee_id = $_POST["employee_id"];
    $employee_name = $_POST["employee_name"];
    $designation = $_POST["designation"];
    $join_date = $_POST["join_date"];
    $address = $_POST['address'];

    $employee_id = mysqli_real_escape_string($connection, $employee_id);
    $employee_name = mysqli_real_escape_string($connection, $employee_name);
    $designation = mysqli_real_escape_string($connection, $designation);

    $query = "INSERT INTO `employee_information`(employee_id, employee_name, designation, join_date, address) VALUES
                ('$employee_id','$employee_name','$designation','$join_date', '$address')";
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
            <legend>Employee_Information_System</legend>
            <table>
                <tr>
                    <td style="width:300px">Employee ID:</td>
                    <td><input type="text" name="employee_id" required></td>
                </tr>
                <tr>
                    <td>Employee Name:</td>
                    <td><input type="text" name="employee_name" required></td>
                </tr>
                <tr>
                    <td>Designation:</td>
                    <td><input type="text" name="designation" required></td>
                </tr>
                <tr>
                    <td>Join Date:</td>
                    <td><input type="date" name="join_date" required></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><textarea rows="4" cols="50" name="address" required></textarea></td>
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
