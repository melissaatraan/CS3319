

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Select a customer to view their purchases</title>
</head>
<body>
<?php
include 'connect.php';
?>

<form action="getcustomers.php" method="post">
<?php 
include 'getdata.php';
?>
<input type="submit" value="Get Pet Names">
</form>
<?php
mysqli_close($connection);
?>
</body>
</html>
