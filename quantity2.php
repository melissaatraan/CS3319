
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
 <h1>Find out which customer has bought more than a given quantity of any product:</h1>
<form action="quantity2.php" method="post">
<h4>Input a value:</h4>
<input type="number" name="num">
<input type="submit" value="Enter">
 <?php
    $answer=$_POST["num"];
    $query='SELECT firstname, description, Quantity FROM purchases as a INNER JOIN customer as b ON a.cusID=b.cusID INNER JOIN product c ON c.prodID=a.prodID';	
    $result=mysqli_query($connection,$query);
     if (!$result) {
          die("database query failed in getcustomer.php.");
      }
     while ($row=mysqli_fetch_assoc($result)) {
         echo "<br>"; 
	if($answer < $row["Quantity"]){        
	echo $row["firstname"] . " - " . $row["description"] . " - " . $row["Quantity"];
         echo "<br>";
      		}
	}
      mysqli_free_result($result);
 ?>


</form>

 <?php
    mysqli_close($connection);
 ?>
 </body>
 </html>
