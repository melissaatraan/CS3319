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
<ol>
 <?php
    $answer=$_POST["cusID"];
    echo "$answer";
    $query1="DELETE FROM customer WHERE cusID = '$answer'";
    $query = 'SELECT * FROM customer';

    $result=mysqli_query($connection,$query1);
     if (!$result) {
          die("could not delete customer in getcustomer.php.");
      }
  $result1=mysqli_query($connection,$query);
     if (!$result1) {
          die("database query failed in getcustomer.php.");
      }

     while ($row=mysqli_fetch_assoc($result1)) {
         echo "<li>";
//      echo $row["cusID"];
         echo $row["firstname"] . " - " . $row["lastname"] . " - " . $row["phonenumber"] . " - " . $row["agentID"] . " - " . $row["cusID"];
         echo "<br>";
      }
      mysqli_free_result($result);
 ?>
</ol>
<h4>Deletion successful.</h4>

 <?php
    mysqli_close($connection);
 ?>

