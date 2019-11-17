<?php include "db.php" ?>
<?php
if(isset($_POST["submit"]))
{
    $name = $_POST["sName"];
    $department = $_POST["dpart"];
    $roll = $_POST["roll"];
    $semester = $_POST["semester"];
    $session = $_POST["session"];

    $first_sub = $_POST["first_sub"];
    $second_sub = $_POST["second_sub"];
    $third_sub = $_POST["third_sub"];
    $fourth_sub = $_POST["fourth_sub"];
    $fifth_sub = $_POST["fifth_sub"];
    $sixth_sub = $_POST["sixth_sub"];

    $first_mark = $_POST["first_mark"];
    $second_mark = $_POST["second_mark"];
    $third_mark = $_POST["third_mark"];
    $fourth_mark = $_POST["fourth_mark"];
    $fifth_mark = $_POST["fifth_mark"];
    $sixth_mark = $_POST["sixth_mark"];

    $first = $first_sub .'(' . $first_mark . ')';
    $second = $second_sub . '(' . $second_mark . ')';
    $third = $third_sub . '(' . $third_mark .')';
    $fourth = $fourth_sub . '(' . $fourth_mark .')';
    $fifth = $fifth_sub . '(' . $fifth_mark . ')';
    $sixth = $sixth_sub . '(' . $sixth_mark . ')';

    $cgpa = $first_mark + $second_mark + $third_mark + $fourth_mark + $fifth_mark + $sixth_mark;
    $cgpa = $cgpa/6;
    if($cgpa>=80){
        $cgpa = 4.0;
    }
    elseif ($cgpa >= 75){
        $cgpa = 3.75;
    }
    elseif($cgpa>= 70){
        $cgpa = 3.5;
    }
    elseif ($cgpa >= 65){
        $cgpa = 3.25;
    }
    elseif ($cgpa >= 60){
        $cgpa = 3.0;
    }
    elseif ($cgpa >= 55){
        $cgpa = 2.75;
    }
    elseif ($cgpa >= 50){
        $cgpa = 2.5;
    }
    elseif ($cgpa >= 45){
        $cgpa = 2.25;
    }
    elseif ($cgpa >= 40){
        $cgpa = 2.0;
    }
    else{
        $cgpa = 0.0;
    }

    $name = mysqli_real_escape_string($connection, $name);
    $department = mysqli_real_escape_string($connection, $department);
    $session = mysqli_real_escape_string($connection, $session);


    $query = "INSERT INTO `Student_Result` (Name, Department_Name, Roll, Semester, Session, 1st_Subject, 2nd_Subject, 3rd_Subject, 4th_Subject, 5th_Subject, 6th_Subject, Total_CGPA) VALUES
             ('$name','$department','$roll','$semester','$session','$first','$second','$third','$fourth','$fifth','$sixth','$cgpa')";

    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed". mysqli_error());
    }
}
 ?>
<html>
<head>
    <title>Result Processing Sytem</title>
</head>
<body>
    <form action="insert.php" method="post">
        <fieldset>
            <legend align="center">Add Student Result</legend>
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

                <tr>
                    <td>Session:</td>
                    <td><input type="text" name="session" required></td>
                </tr>

                <tr>
                    <td align="center"><b>Subject Name</b></td>
                    <td align="center"><b>Marks</b></td>
                </tr>
                <tr>
                    <td><input type="text" name="first_sub" required></td>
                    <td><input type="number" name="first_mark" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="second_sub" required></td>
                    <td><input type="number" name="second_mark" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="third_sub" required></td>
                    <td><input type="number" name="third_mark" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="fourth_sub" required></td>
                    <td><input type="number" name="fourth_mark" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="fifth_sub" required></td>
                    <td><input type="number" name="fifth_mark" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="sixth_sub" required></td>
                    <td><input type="number" name="sixth_mark" required></td>
                </tr>
            </table>
            <button type="submit" name="submit">Submit</button>
        </fieldset>

    </form>
</body>
</html>
