<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

</head>
<body>
<h1>Thank you for making a purchase!</h1>
<?php
 include 'connect.php';
 ?>
<?php
$whichprod=$_POST["whichprod"];
$quantity=$_POST["quantity"];
$cusID=$_POST["cusID"];
echo $cusID;
   $query = "SELECT * FROM purchases WHERE prodID ='$whichprod' AND cusID='$cusID'";
    $result=mysqli_query($connection,$query);
    //$result=mysqli_query($connection,$query2);
     if (!$result){
          die("database query2 failed.");
      }
        if(mysqli_num_rows($result)==0){
		$query3="INSERT INTO purchases VALUES('".$cusID."', '".$whichprod."', '".$quantity."')";
		$result=mysqli_query($connection, $query3);
	}else{
		$query4="UPDATE purchases SET Quantity=Quantity+'$quantity' WHERE cusID='$cusID' AND prodID='$whichprod'";
		$result=mysqli_query($connection,$query4);
	}
	 
         //echo $row["cusID"] . " - " . $row["prodID"] . " - " . $row["description"] . " - " . $row["cost"] . " - " . $row["Quantity"] . "<br>";
//      mysqli_free_result($result);
?>
<?php
    mysqli_close($connection);
 ?>

</body>
</html>
