<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 </head>
 <body>
 <?php
 include 'connect.php';
 ?>
 <h1>Here are the customers:</h1>
 <h4>Given by customerID, specify which customer you would like to delete</h4>
<form action="deletecustomer2.php" method="post">
 <?php
    $query = 'SELECT *  FROM customer';
    $result=mysqli_query($connection,$query);
     if (!$result) {
          die("database query failed in getcustomer.php.");
      }
     while ($row=mysqli_fetch_assoc($result)) {
         echo '<input type="radio" name="cusID" value="'  . $row["cusID"] . '">';
         echo $row["cusID"];
         echo "<br>";
      }
      mysqli_free_result($result);
 ?>
<input type="submit" value="Delete">

</form>
 <?php
    mysqli_close($connection);
 ?>
 </body>
 </html>

