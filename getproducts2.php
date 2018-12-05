<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel="stylesheet" href="main.css" />
<h1>This is the Product's Descending order:</h1>
</head>
<form action="getproducts.php" method="post">
<?php
include 'connect.php';
$answer=$_POST["button"];
$query= "SELECT * FROM product ORDER BY description DESC";
$result=mysqli_query($connection,$query);
if(!$result){
        die("database query failed - in getproducts.php");
}

while($row=mysqli_fetch_assoc($result)){
        echo "<li>";
        echo $row["prodID"] . " - " . $row["description"] . " - " . $row["cost"] . " - " . $row["quantityonhand"] . "<br>";
}
mysqli_free_result($result);
?>
<input type="submit" value="Ascending Order">
</form>

<?php
    mysqli_close($connection);
?>

</html>
