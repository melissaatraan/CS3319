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
<form action="getpurchases.php" method="post">


 <?php
    $query = 'SELECT *  FROM customer ORDER BY lastname';
    $result=mysqli_query($connection,$query);
     if (!$result) {
          die("database query failed in getcustomer.php.");
      }
     while ($row=mysqli_fetch_assoc($result)) {
         echo '<input type="radio" name="whichcus" value="'  . $row["cusID"] . '">';
         echo $row["firstname"] . " - " . $row["lastname"] . " - " . $row["phonenumber"] . " - " . $row["agentID"] . " - " . $row["cusID"] . " - " . $row["city"];
         echo "<br>";
      }
      mysqli_free_result($result);
 ?>
<input type="submit" value="click here to see purchases">

</form>

 <?php
    mysqli_close($connection);
 ?>
 </body>
 </html>
