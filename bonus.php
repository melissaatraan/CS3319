<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
<link rel="stylesheet" href="main.css" />
 </head>
 <body>
<form action="bonus2.php" method="post" enctype="multipart/form-data">
 <?php
 include 'connect.php';
 ?>
 <?php
    'ALTER TABLE customer ADD cusimage CHAR(100)';
    $query = 'SELECT * FROM customer';
    $result=mysqli_query($connection,$query);
     if (!$result) {
          die("database query failed in getcustomer.php.");
      }
     while ($row=mysqli_fetch_assoc($result)) {
	echo $row["cusID"] . " - " . $row["firstname"] . " - " . $row["lastname"] . " - " . $ro["city"] . " - " . $row["phonenumber"] . " - " . $row["agentID"] . " - " . $row["cusimage"];
        echo '<input type="file" name="whichcus" value="'  . $row["cusimage"] . '">';	 
	echo "<br>";
      }
      mysqli_free_result($result);
 ?>

<button type="submit" name="submit">UPLOAD</button>
</form>
 <?php
    mysqli_close($connection);
 ?>
 </body>
 </html>
