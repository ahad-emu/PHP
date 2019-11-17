<?php include "db.php" ?>
<html>
<head>
    <title>Result Processing Sytem</title>
</head>
<body>
    <form action="search.php" method="post">
        <fieldset>
            <legend align="center">Show Student Result</legend>
            <table>
                <tr>
                    <td>Student Name:</td>
                    <td><input type="text" name="sName" required ></td>
                </tr>
                <tr>
                    <td>Department:</td>
                    <td>
                        <select name="dpart">
                            <option value="CSE">CSE</option>
                            <option value="BBA">BBA</option>
                            <option value="ENGLISH">ENLISH</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Roll Number:</td>
                    <td><input type="number" name="roll" required></td>
                </tr>

                <tr>
                    <td>Semester:</td>
                    <td>
                        <select name="semester">
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                            <option value="4th">4th</option>
                            <option value="5th">5th</option>
                            <option value="6th">6th</option>
                            <option value="7th">7th</option>
                            <option value="8th">8th</option>
                        </select>
                    </td>
                </tr>
            </table>
            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
    $name = $_POST["sName"];
    $department = $_POST["dpart"];
    $roll = $_POST["roll"];
    $semester = $_POST["semester"];
    $query = "select * from Student_Result where Name = '$name' and Department_Name = '$department' and Roll = '$roll' and Semester = '$semester'";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed". mysqli_error());
    }
    $row = mysqli_fetch_assoc($result);
    echo "<table border='1' align='center'>
                <tr align='center'>
                    <td style='width:150px'><b>Name</b></td>
                    <td style='width:150px'><b>".$row['Name']."</b></td>
                </tr>
                <tr align='center'>
                    <td style='width:150px'><b>Department Name</b></td>
                    <td style='width:150px'><b>".$row['Department_Name']."</b></td>
                </tr>
                <tr align='center'>
                    <td style='width:150px'><b>Semester</td>
                    <td style='width:150px'><b>".$row['Semester']."</b></td>
                </tr>
                <tr align='center'>
                    <td style='width:150px'><b>Roll</b></td>
                    <td style='width:150px'><b>".$row['Roll']."</b></td>
                </tr>
                <tr align='center'>
                    <td style='width:150px'><b>First Subject</b></td>
                    <td style='width:150px'><b>".$row['1st_Subject']."</b></td>
                </tr>
                <tr align='center'>
                    <td style='width:150px'><b>Second Subject</b></td>
                    <td style='width:150px'><b>".$row['2nd_Subject']."</b></td>
                </tr>
                <tr align='center'>
                    <td style='width:150px'><b>Third Subject</td>
                    <td style='width:150px'><b>".$row['3rd_Subject']."</b></td>
                </tr>
                <tr align='center'>
                    <td style='width:150px'><b>Fourth Subject</td>
                    <td style='width:150px'><b>".$row['4th_Subject']."</b></td>
                </tr>
                <tr align='center'>
                    <td style='width:150px'><b>Fifth Subject</td>
                    <td style='width:150px'><b>".$row['5th_Subject']."</b></td>
                </tr>
                <tr align='center'>
                    <td style='width:150px'><b>Sixth Subject</td>
                    <td style='width:150px'><b>".$row['6th_Subject']."</b></td>
                </tr>
                <tr align='center'>
                    <td style='width:150px'><b>Total CGPA</td>
                    <td style='width:150px'><b>".$row['Total_CGPA']."</b></td>
                </tr>
            </table>";
}

?>
