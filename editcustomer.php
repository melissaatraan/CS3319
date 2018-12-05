<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<h1>Here you can change the phone number</h1>
<h2>Select your customerID:</h2> 
</head>
<body>
<form action="editcustomer2.php" method="post">
<?php
include 'connect.php';
$query= 'SELECT * FROM customer';
$result=mysqli_query($connection,$query); 
if(!$result){
	die("database connection failed - editcustomer.php");
}
while($row=mysqli_fetch_assoc($result)){
	        echo '<input type="radio" name="cusID" value="'  . $row["cusID"] . '">';
		echo $row["cusID"];
		echo "</br>";
}
     mysqli_free_result($result);
    mysqli_close($connection);
?>
<input type="text" name="phonenum" min="0" max="9999999999">
<input type="submit" value="Update">

</form>
</body>
</html>

