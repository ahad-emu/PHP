<?php include "db.php" ?>
<?php
if(isset($_POST["submit"])){
    global $connection;
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $roll = $_POST["roll_no"];
    $sec = $_POST["section"];
    $query = "UPDATE `student_information` SET first_name='$first_name',last_name='$last_name',sec='$sec' WHERE roll= $roll";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed". mysqli_error());
     }
 }
?>
<html>
<head>
    <title>Student_Information_System</title>
</head>
</body>
    <form method="post" action="update.php">
        <fieldset>
            <legend>Update Student Information</legend>
            <table>
                <tr>
                    <td>Roll Number:</td>
                    <td>
                        <select name="roll_no" id = "roll" onchange="change()">
                            <?php
                            global $connection;
                            $query = "select * from Student_Information order by roll";
                            $result = mysqli_query($connection, $query);
                            if(!$result){
                                die("Query Failed". mysqli_error());
                            }
                            while($row = mysqli_fetch_assoc($result)){
                                $roll = $row["roll"];
                             ?>
                            <option value="<?php echo $roll ?>"><?php echo $roll ?></option>
                            <?php
                        }
                             ?>
                        </select>
                        <button type="submit" name="check">Check</button>
                    </td>
                </tr>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="first_name" required></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="last_name" required></td>
                </tr>
                <tr>
                    <td>Section:</td>
                    <td><input type="text" name="section" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" name="submit">Update</button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
