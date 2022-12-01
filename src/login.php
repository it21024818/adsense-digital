<?php
	require 'config.php';
	
	if(isset($_POST['email'])){
		
		$mail=$_POST['Login'];
		$password=$_POST['password'];
		
		$sql="select * from user_registration where user='".$mail."'AND Pass='".$password."' limit 1";
		
		$result=mysql_query($sql);
		
		if(mysql_num_rows($result)==1){
			echo " You Have Successfully Logged in";
			exit();
		}
		else{
			echo " You Have Entered Incorrect Password";
			exit();
		}
			
	}
	
?>

