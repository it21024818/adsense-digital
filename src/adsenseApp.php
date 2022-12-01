<?php 
	if (isset($_POST['btnsubmit'])) {

	require 'config.php';

	$fname     = $_REQUEST['fname'];
	$lname     = $_REQUEST['lname'];
	$email     = $_REQUEST['email'];
	$phone     = $_REQUEST['phone'];
	$location  = $_REQUEST['location'];
	$position  = $_POST['position'];
	$beginner  = $_POST['beginner'];
	$message   = $_POST['message'];

	$sql = "INSERT INTO career(firstName,lastName,email,phone,location,position,beginner,about) VALUES ('$fname','$lname','$email','$phone','$location','$position','$beginner','$message')";

	$target_dir = "Upload/";
	$target_file = $target_dir . basename($_FILES["adsenseCV"]["name"]);
		if(isset($_FILES["adsenseCV"])) {
			if (move_uploaded_file($_FILES["adsenseCV"]["tmp_name"],$target_file)){
				echo "The file ". basename( $_FILES["adsenseCV"]["name"]). " is uploaded.";
			} 
			else {
				echo "Error while uploading your file."; 
			}
		}else {
			echo "File not available"; 
		}

	if($con->query($sql)){
		echo "Inserted successfully";
	}
	else{
		echo "Error:". $con->error;
	}

	$con->close();

	}

 ?>