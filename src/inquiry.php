<?php
	require 'config.php';

	$fullname = $_REQUEST['fullname'];
	$fullemail = $_REQUEST['fullemail'];
	$more = $_REQUEST['more'];

	$sql = "INSERT INTO inquiries(cus_name, cus_email, cus_inq) VALUES ('$fullname', '$fullemail', '$more')";

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