<?php 
    if(!isset($_SESSION)){
		session_start();
	   }
	require('../models/usermodel.php');
	
	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
        $_SESSION['a']=$username;
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != null && $password != null && $email != null){

			$status = signup($username, $password, $email);
			if($status){
				header('location: ../views/onboard.php');			
			}else{
				header('location: ../views/reg.php');
			}
	
			
		}else{
			echo "null submission";
		}
	}
?>