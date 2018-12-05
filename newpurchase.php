<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
	<form action="newpurchase2.php" method="post">
	<h2>Select your CustomerID number:</h2>
<?php
include 'connect.php';
$cusID = 'SELECT * FROM customer';
$result=mysqli_query($connection,$cusID);
if(!$result){
        die("database query failed in newpurchase.php");
}
     while ($row=mysqli_fetch_assoc($result)) {
         echo '<input type="radio" name="cusID" value="'  . $row["cusID"] . '">';
         echo $row["cusID"];
         echo "<br>";
      }

    mysqli_free_result($result);
    mysqli_close($connection);
?>
<input type="submit" value="Next">
</form>
<br></br>
<br></br>
<br></br>
<h4>Upon registration with our shop, you would be given a CustomerID number whi$
CustomerID number please click the link below"</h4>
<a href="https://www.w3schools.com/html/">I forgot my customerID</a>
<br></br>
<a href="https://www.w3schools.com/html/">I do not have a customerID, sign up</a>

</body>
</html>
