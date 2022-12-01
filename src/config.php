<?php 

	$servername  = "127.0.0.1";
	$username    = "root";
	$password    = "";
	$dbname      = "adsensedigital";

	// create connection
	$con = new mysqli($servername,$username,$password,$dbname);

	// check connection
	if ($con -> connect_error){
		die("connection failed: " . $con -> connect_error);
	}

 ?>