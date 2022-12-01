<?php
	require 'config.php';

	$cfirstname = $_REQUEST["firstname"];
	$clastname  = $_REQUEST["lastname"];
	$cphone     = $_REQUEST["phone"];
	$cbudget    = $_REQUEST["budget"];
	$cmore      = $_REQUEST["more"];

	$sql = "INSERT INTO contactus(inq_firstname, inq_lastname, inq_phone, inq_budget, inq_more) VALUES ('$cfirstname', '$clastname', '$cphone', '$cbudget', '$cmore')";

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