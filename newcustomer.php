<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="main.css" />

<h1>Add a new customer here:</h1>
<form action="newcustomer2.php" method="post">
<input type = "text" value="First Name" name="firstname">
<br></br>
<input type = "text" value="Last Name" name="lastname">
<br></br>
<input type = "text" value="City" name="city">
<br></br>
<input type = "text" value="Phone" name="phonenum" maxlength="7">
<br></br>
<input type = "text" value="AgentID" name="agentID">
<br></br>
<!-- important cusID used in newcustomer.php to check if cusID already exists-->
<input type = "text" value="CustomerID" name="cusID">
<br></br>
<input type="submit" value="Create account!">

<?php
include 'connect.php';
$cusID=$_POST["cusID"];
$query ="SELECT * FROM customer";
$result=mysqli_query($connection,$query);
if(!$result){
	die("connection to database failed - newcustomer.php");
}

while($row=mysqli_fetch_assoc($result)){
	if($cusID == $row["cusID"]){
		die("This CustomerID already exists, please choose another");
	}
//else, there are no customerID that matches the one given
}
mysqli_free_result($result);
mysqli_close($connection);
?>
</form>
</head>
<body>
</body>
</html>
