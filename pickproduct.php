<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 </head>
 <body>
 <?php
 include 'connect.php';
 ?>
 <h1>Select a productID number to display it's information:</h1>

<form action="pickproduct2.php" method="post">
 <?php
    $query = 'SELECT prodID FROM product';
    $result=mysqli_query($connection,$query);
     if (!$result) {
          die("database query failed in getcustomer.php.");
      }
     while ($row=mysqli_fetch_assoc($result)) {
         echo '<input type="radio" name="prodID" value="'  . $row["prodID"] . '">';
         echo $row["prodID"];
         echo "<br>";
      }
      mysqli_free_result($result);
 ?>
<input type="submit" value="Enter">
</form>

 <?php
    mysqli_close($connection);
 ?>
 </body>
 </html>
