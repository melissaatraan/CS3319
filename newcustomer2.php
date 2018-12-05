<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 </head>
 <body>
<ol>
 <h1>Here are the customers:</h1>

 <?php
include 'connect.php';
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$phonenum=$_POST["phonenum"];
$city=$_POST["city"];
$agentID=$_POST["agentID"];
$cusID=$_POST["cusID"];

$query3="INSERT INTO customer VALUES ('".$cusID."','".$firstname."','".$lastname."','".$city."','".$phonenum."','".$agentID."')";
$query4="SELECT * FROM customer WHERE cusID='$cusID'";
$result=mysqli_query($connection,$query4);
        if (!$result) {
                die("database query failed in newcustomer.php.");
}         
$querycheckagent="SELECT * FROM agent WHERE agentID='$agentID'";
$resultagent=mysqli_query($connection,$querycheckagent);
if (mysqli_num_rows($resultagent)==0) {
           die("Sorry, you picked an agent id that doesnt exist.");
}         

$yolo=mysqli_num_rows($result);
echo $yolo;
if(mysqli_num_rows($result)==0){

    echo $query3;
    $result=mysqli_query($connection,$query3);
    if(!$result){
			die("problem with database, cant insert");
		}
     header("Location: getcustomers.php");
     exit;
}else{
	die("Customer already exist. Please choose a unique customerID");
}
      mysqli_free_result($result);
   mysqli_close($connection);
 ?>
</ol>
 </body>
 </html>

