<?php include "db.php" ?>
<?php
if(isset($_POST["submit"])){
    $roll = $_POST["search"];
    $query = "DELETE FROM `student_information` where roll=$roll";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed". mysqli_error());
    }
}
?>
<html>
<head>
    <title></title>
</head>
</body>
    <h2>Delete Student Information</h2>
    <form action="delete.php" method="post">
        <input type="number" name="search">
        <input type="submit" name="submit">
    </form>
</body>
</html>
