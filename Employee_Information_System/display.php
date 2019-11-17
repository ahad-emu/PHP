<?php include "db.php" ?>
<?php
 $query = "select * from employee_information Order by employee_id";
 $result = mysqli_query($connection, $query);
 if(!$result){
     die("Query Failed". mysqli_error());
 }
?>
<html>
<head>
    <title>Employee_Information_System</title>
</head>
<body>
    <h2 align="center">Employee_Information_System</h2>
    <hr />
    <table border="2" height"auto" width="500px" align="center">
        <tr>
            <th>Employee ID:</th>
            <th>Employee Name:</th>
            <th>Designation:</th>
            <th>Join Date:</th>
            <th>Address:</th>
        </tr>
    <?php
        while($row = mysqli_fetch_assoc($result)){
    ?>
        <tr>
            <td align="center"><?php echo $row['employee_id']; ?></td>
            <td align="center"><?php echo $row['employee_name']; ?></td>
            <td align="center"><?php echo $row['designation']; ?></td>
            <td align="center" width="100px"><?php echo$row['join_date']; ?></td>
            <td align="center" width="150px"><?php echo$row['address']; ?></td>
        </tr>
    <?php
        }
     ?>
     </table>
</body>
</html>
