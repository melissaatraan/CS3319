<DOCTYPE! html>
<html>
<head>
<meta charset="utf-8">
<h1>Select products you would like to purchase</h1>
</head>
<body>
<form action="newpurchase3.php" method="post">
<?php
include 'connect.php';
$cusID=$_POST["cusID"];
$query='SELECT * FROM product';
$result=mysqli_query($connection,$query);
if(!$result){
        die("database connection failed - newpurchase2.php");
}
$row=mysqli_fetch_assoc($result);

while($row=mysqli_fetch_assoc($result)){
        echo '<input type="radio" name="whichprod" value="'  . $row["prodID"] . '">';
      echo $row["prodID"] . " - " . $row["description"] . " - " . $row["cost"] . "<br>";
}
echo '<input type="number" name="quantity" value="0">';
echo '<input type="hidden" name="cusID" value="'.$cusID.'">';
mysqli_free_result($result);
mysqli_close($connection);
?>
<input type="submit" value="Check out">
</form>
</body>
</html>
