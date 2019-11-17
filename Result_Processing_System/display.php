<?php include "db.php" ?>
<?php
 $query = "select * from Student_Result";
 $result = mysqli_query($connection, $query);
 if(!$result){
     die("Query Failed". mysqli_error());
 }
?>
<html>
<head>
    <title>Result Processing Sytem</title>
</head>
<body>
    <h2 align="center">Result_Processing_Sytem</h2>
    <table border="2" height"auto" width="500px" align="center">
        <tr>
            <th>Name</th>
            <th>Department Name</th>
            <th>Roll Number</th>
            <th>Semester</th>
            <th>Session</th>
            <th>First_Sub</th>
            <th>Second_Sub</th>
            <th>Third_sub</th>
            <th>Fourth_sub</th>
            <th>Fifth_sub</th>
            <th>Sixth_sub</th>
            <th>CGPA</th>
        </tr>
    <?php
        while($row = mysqli_fetch_assoc($result)){
    ?>
        <tr>
            <td align="center"><?php echo $row['Name']; ?></td>
            <td align="center"><?php echo $row['Department_Name']; ?></td>
            <td align="center"><?php echo $row['Roll']; ?></td>
            <td align="center"><?php echo$row['Semester']; ?></td>
            <td align="center"><?php echo $row['Session']; ?></td>
            <td align="center"><?php echo $row['1st_Subject']; ?></td>
            <td align="center"><?php echo $row['2nd_Subject']; ?></td>
            <td align="center"><?php echo$row['3rd_Subject']; ?></td>
            <td align="center"><?php echo $row['4th_Subject']; ?></td>
            <td align="center"><?php echo $row['5th_Subject']; ?></td>
            <td align="center"><?php echo $row['6th_Subject']; ?></td>
            <td align="center"><?php echo$row['Total_CGPA']; ?></td>
        </tr>
    <?php
        }
     ?>
     </table>
</body>
</html>
