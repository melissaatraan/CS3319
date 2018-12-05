<?php
include 'connect.php';
$query = "SELECT * FROM customer ORDER BY lastname";
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed - in getcustomer.");
 }
echo "<ul>";
 while ($row = mysqli_fetch_assoc($result)) {
      echo '<input type="radio" name="customerspurchase" value="';
      echo $row["firstname"];
      echo ">' . $row["lastname"] . " - " . $row["cusid"] . " - " . $row["city"] . " - " . $row["phonenumber"] . " - " . $row["agentID"] . "<br>";
 }
echo "</ul>";
 mysqli_free_result($result);

?>
