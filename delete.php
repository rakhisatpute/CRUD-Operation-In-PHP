<?php
require 'config.php';
 $target_dir = "upload/";
	$emp_Id=$_GET['emp_Id'];
	$res=mysqli_query($conn,"select name from save_record where emp_Id='$emp_Id'");
	$row=mysqli_fetch_array($res);

//echo $target_dir.$row['name'];
unlink($target_dir.$row['name']);
	$sql = "delete from save_record  where emp_Id ='$emp_Id'";


			if ($conn->query($sql) === TRUE) {
				header('Location: read.php');
    			echo "Record deleted successfully";
    			
			} else {
    		echo "Error deleting record: " . $conn->error;
			}
		




?>
