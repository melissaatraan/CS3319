<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
<link rel="stylesheet" href="main.css" />
 </head>
 <body>
 <?php
 include 'connect.php';
 ?>
 <h1>Here are products which has never been purchased:</h1>
 <?php
 $query = 'SELECT * FROM product a LEFT JOIN purchases b ON a.prodID = b.prodID WHERE Quantity IS NULL';
     $result=mysqli_query($connection,$query);
     if (!$result) {
          die("database query failed in getcustomer.php.");
      }
     while ($row=mysqli_fetch_assoc($result)) {
        echo "<li>";
	 echo $row["description"];
         echo "<br>";
      }
      mysqli_free_result($result);

    mysqli_close($connection);
 ?>
 </body>
 </html>
