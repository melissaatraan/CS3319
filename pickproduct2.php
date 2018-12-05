<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
<link rel="stylesheet" href="main.css" />
<h5>Total number of purchases, and cost for this product</h5>
 </head>
 <body>
 <?php
 include 'connect.php';
 ?>
 <?php
$prodID=$_POST["prodID"];
    $query = 'SELECT * FROM product a LEFT JOIN purchases b ON a.prodID=b.prodID';
    $result=mysqli_query($connection,$query);
     if (!$result) {
          die("database query failed in getcustomer.php.");
      }
     while ($row=mysqli_fetch_assoc($result)) {
	if($prodID==$row["prodID"]){
         echo $row["description"] . " - " . $row["Quantity"] . " - " . $row["cost"]*$row["Quantity"];
         echo "<br>";
	}      
}
      mysqli_free_result($result);
 ?>

 <?php
    mysqli_close($connection);
 ?>
 </body>
 </html>
