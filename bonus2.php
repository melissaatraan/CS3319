

<?php
include 'connect.php';
$query="SELECT * FROM customer";
if(isset($_POST['submit'])){
	$file=$_FILES['whichcus'];
	$fileName=$_FILES['file']['name'];
	$fileTmpName=$_FILES['file']['tmp_name'];
	$fileSize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];
	$fileType=$_FILES['file']['type'];
	$fileExt=explode('.',$fileName);
	$fileActualExt=strtolower(end($fileExt));
	//aaray
	$allowed=array('jpg', 'jpeg', 'png', 'pdf');
}

$result=mysqli_query($connection,$query);
     if (!$result) {
          die("database query2 failed.");
      }

if(in_array($fileActualExt, $allowed)){
echo "hi";

	if($fileError==0){
		if($fileSize <1000000){
			$fileNameNew = uniqueid('', true). "." .$fileActualExt;
			$fileDestination='uploads/'.$fileNameNew;
			move_uploaded_file($fileTmpName, $fileDestination);
			header("Location: index.php?uploadsuccess");

		}else{
		echo "Your file is too big!";
		}

	}else{
		echo "there was an error uploading your file!;
	}

}else{
	echo "You cannot upload files of this type";
}

     while ($row=mysqli_fetch_assoc($result)) {
	echo $row["cusID"] . " - " . $row["firstname"] . " - " . $row["lastname"] . " - " . $ro["city"] . " - " . $row["phonenumber"] . " - " . $row["agentID"] . " - " . $row["cusimage"];
//	echo <img src="$fileName" alt="Customer Image" height="42" width="42">;
         echo "<br>";
      }


      mysqli_free_result($result);
    mysqli_close($connection);
 ?>

