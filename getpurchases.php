<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<link rel="stylesheet" href="main.css" />
</head>

<body>
 <?php
 include 'connect.php';
 ?>
<?php
$answer=$_POST["whichcus"];
   $query = "SELECT * FROM product as a JOIN purchases b ON a.prodID=b.prodID WHERE cusID LIKE '$answer'";
    $result=mysqli_query($connection,$query);
     if (!$result) {
          die("database query2 failed.");
      }
     while ($row=mysqli_fetch_assoc($result)) {
         echo '<li>';
         echo $row["prodID"] . " - " . $row["description"] . " - " . $row["cost"] . " - " . $row["Quantity"] . "<br>";
      }
      mysqli_free_result($result);
 
 

?> 
<?php
    mysqli_close($connection);
 ?>
</body>
</html>
