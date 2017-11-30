<?php

		
		session_start();
		
		include("Connection.php");

		if ($_POST['submit'] == "Log In") {	
	
		$query = "SELECT * FROM users WHERE username='".mysqli_real_escape_string($link, $_POST['loginemail'])."'AND 
		password='" .md5(md5($_POST['loginemail']) .$_POST['loginpassword']). "'LIMIT 1";

		$result = mysqli_query($link, $query);
		
		$row = mysqli_fetch_array($result);
		
		if($row){
		
			
			header("Location:mainpage.php");
			
		
		
    
		} else {
		
			$error = "We could not find a user with that email and password. Please try again.";
			
			
		
		}
	
	}
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
?>