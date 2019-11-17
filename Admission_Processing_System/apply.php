<?php include "db.php" ?>
<?php
if(isset($_POST["submit"]))
{
    $cName = $_POST["cName"];
    $candidate_name = $_POST["ca_Name"];
    $fName = $_POST["fName"];
    $date = $_POST["date"];
    $religion = $_POST["religion"];
    $present = $_POST["pre_address"];
    $parmanent = $_POST["par_address"];
    $nationality = $_POST["nationality"];
    $mobile_no = $_POST["mobile_no"];
    $email = $_POST["email"];

    $cName = mysqli_real_escape_string($connection, $cName);
    $candidate_name = mysqli_real_escape_string($connection, $candidate_name);
    $fName = mysqli_real_escape_string($connection, $fName);
    $date = mysqli_real_escape_string($connection, $date);
    $religion = mysqli_real_escape_string($connection, $religion);
    $email = mysqli_real_escape_string($connection, $email);
    $nationality = mysqli_real_escape_string($connection, $nationality);
    $mobile_no = mysqli_real_escape_string($connection, $mobile_no);
    $present = mysqli_real_escape_string($connection, $present);


    $query = "INSERT INTO `admission` (cName, candidate_name, fName, date, religion, present, parmanent, nationality, mobile_no, email) VALUES
             ('$cName','$candidate_name','$fName','$date','$religion','$present','$parmanent','$nationality','$mobile_no','$email')";

    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed". mysqli_error());
    }
}
 ?>
<html>
<head>
    <title>Admission Processing Sytem</title>
</head>
<body>
    <form action="apply.php" method="post">
        <fieldset>
            <legend align="center">Add Candidate Information</legend>
            <table>
                <tr>
                    <td>Course Applied For:</td>
                    <td><input type="text" name="cName" required ></td>
                </tr>
                <tr>
                    <td>Name Of Candidate:</td>
                    <td><input type="text" name="ca_Name" required ></td>
                </tr>
                <tr>
                    <td>Father Name:</td>
                    <td><input type="text" name="fName" required></td>
                </tr>

                <tr>
                    <td>Date Of Birth:</td>
                    <td><input type="date" name="date" required></td>
                </tr>

                <tr>
                    <td>Religion:</td>
                    <td><input type="text" name="religion" required></td>
                </tr>

                <tr>
                    <td>Present Adderess:</td>
                    <td><textarea name="pre_address" rows="4" cols="30"></textarea></td>
                </tr>
                <tr>
                    <td>Parmanent Address:</td>
                    <td><textarea name="par_address" rows="4" cols="30"></textarea></td>
                </tr>

                <tr>
                    <td>Nationality:</td>
                    <td><input type="text" name="nationality" required></td>
                </tr>
                <tr>
                    <td>Mobile Number:</td>
                    <td><input type="text" name="mobile_no" required></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" required></td>
                </tr>
            </table>
            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>
