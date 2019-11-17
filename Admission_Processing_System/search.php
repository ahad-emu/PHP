<?php include "db.php" ?>
<html>
<head>
    <title>Admission Processing Sytem</title>
</head>
<body>
    <form action="search.php" method="post">
        <fieldset>
            <legend align="center">Show Candidate Information</legend>
            <table>
                <tr>
                    <td>Candidate Name:</td>
                    <td><input type="text" name="ca_Name" required ></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" required ></td>
                </tr>
                <tr>
                    <td>Date Of Birth:</td>
                    <td><input type="date" name="date" required></td>
                </tr>
            </table>
            <button type="submit" name="submit">Search</button>
        </fieldset>
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
    $name = $_POST["ca_Name"];
    $email = $_POST["email"];
    $date = $_POST["date"];

    $query = "select * from admission where candidate_name = '$name' and email = '$email' and date = '$date'";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed". mysqli_error());
    }
    $row = mysqli_fetch_assoc($result);
    echo "<table border='1' align='center'>
                <tr align='center'>
                    <td style='width:150px'><b>Course Name</b></td>
                    <td style='width:150px'><b>".$row['cName']."</b></td>
                </tr>
                <tr align='center'>
                    <td style='width:150px'><b>Candidate Name</b></td>
                    <td style='width:150px'><b>".$row['candidate_name']."</b></td>
                </tr>
                <tr align='center'>
                    <td style='width:150px'><b>Father Name</td>
                    <td style='width:150px'><b>".$row['fName']."</b></td>
                </tr>
                <tr align='center'>
                    <td style='width:150px'><b>Date Of Birth</b></td>
                    <td style='width:150px'><b>".$row['date']."</b></td>
                </tr>
                <tr align='center'>
                    <td style='width:150px'><b>Religion</b></td>
                    <td style='width:150px'><b>".$row['religion']."</b></td>
                </tr>
                <tr align='center'>
                    <td style='width:150px'><b>Present Address</b></td>
                    <td style='width:150px'><b>".$row['present']."</b></td>
                </tr>
                <tr align='center'>
                    <td style='width:150px'><b>Parmanent Address</td>
                    <td style='width:150px'><b>".$row['parmanent']."</b></td>
                </tr>
                <tr align='center'>
                    <td style='width:150px'><b>Nationality</td>
                    <td style='width:150px'><b>".$row['nationality']."</b></td>
                </tr>
                <tr align='center'>
                    <td style='width:150px'><b>Mobile Number</td>
                    <td style='width:150px'><b>".$row['mobile_no']."</b></td>
                </tr>
                <tr align='center'>
                    <td style='width:150px'><b>Email</td>
                    <td style='width:150px'><b>".$row['email']."</b></td>
                </tr>
            </table>";
}

?>
