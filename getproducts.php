<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="main.css" />
<h1>This is the Product's Ascending order:</h1>
</head>
<form action="getproducts2.php" method="post">
<?php
include 'connect.php';
$query= "SELECT * FROM product ORDER BY description";
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
<input type="submit" value="View Descending Order">
</form>

<?php
    mysqli_close($connection);
 ?>


</html>
