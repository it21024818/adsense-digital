<?php
	require 'config.php';
	
	$email = $_REQUEST['email'];
	
	$sql = "INSERT INTO newsletter(email) VALUES ('$email')";

	// Check connection
	if ($con->query($sql) === TRUE) {
		echo "<script> alert('Submitted successfully!')</script>" ;
	}
	else{
		echo "<script> alert('ERROR')</script>" ;
		echo $sql;
	}
	

	$con->close();
?>