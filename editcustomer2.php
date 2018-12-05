<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="main.css" />
</head>
<body>
<?php

include 'connect.php';
$phonenum=$_POST["phonenum"];
$cusID=$_POST["cusID"];
$query="UPDATE customer SET phonenumber = '$phonenum' WHERE cusID = '$cusID'";

$result=mysqli_query($connection, $query);
$query2='SELECT * FROM customer';
$result=mysqli_query($connection, $query2);
if(!result){
        die("database failed to connect - editcustomer2.php");
}
     while ($row=mysqli_fetch_assoc($result)) {
         echo $row["firstname"] . " - " . $row["lastname"] . " - " . $row["phonenumber"];
 	echo "<br>";
}

mysqli_free_result($result);
mysqli_disconnect($connection);

?>


</body>
</html>

