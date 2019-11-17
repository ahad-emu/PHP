<?php include "db.php" ?>
<?php
 $query = "select * from Student_Information Order by roll";
 $result = mysqli_query($connection, $query);
 if(!$result){
     die("Query Failed". mysqli_error());
 }
?>
<html>
<head>
    <title>Student_Information_System</title>
</head>
<body>
    <h2 align="center">Student_Information_System</h2>
    <table border="2" height"auto" width="500px" align="center">
        <tr>
            <th>First Name:</th>
            <th>Last Name:</th>
            <th>Roll Number:</th>
            <th>Section:</th>
        </tr>
    <?php
        while($row = mysqli_fetch_assoc($result)){
    ?>
        <tr>
            <td align="center"><?php echo $row['first_name']; ?></td>
            <td align="center"><?php echo $row['last_name']; ?></td>
            <td align="center"><?php echo $row['roll']; ?></td>
            <td align="center"><?php echo $row['sec']; ?></td>
        </tr>
    <?php
        }
     ?>
     </table>
</body>
</html>
