<?php 
	if(!isset($_SESSION)){
		session_start();
	   }
	include('../models/usermodel.php');
	$username = $_SESSION['a'];
	
	if(isset($_REQUEST['submit'])){

        $target = "../assets/".basename($_FILES['pp']['name']);
        $image = $_FILES['pp']['name'];
        $fname=$_POST['fname'];
        $bio=$_POST['bio'];

		if($image != null && $fname != null && $bio != null){

			move_uploaded_file($_FILES['pp']['tmp_name'], $target);
			$status = profile($username, $image, $fname, $bio);
			if($status){
				header('location: ../views/login.php');			
			}else{
				header('location: ../views/onboard.php');
			}
			
		}else{
			echo "null submission";
		}
	}
?>