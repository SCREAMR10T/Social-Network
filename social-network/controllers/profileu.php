<?php 
	if(!isset($_SESSION)){
		session_start();
	   }
	include('../models/usermodel.php');
	$uname = $_SESSION['b'];
	
	if(isset($_REQUEST['submit'])){

        $target = "../assets/".basename($_FILES['pp']['name']);
        $uimage = $_FILES['pp']['name'];
        $ufname=$_POST['fname'];
        $ubio=$_POST['bio'];

		if($uimage != null && $ufname != null && $ubio != null){

			move_uploaded_file($_FILES['pp']['tmp_name'], $target);
			$status = pupdate($uname, $uimage, $ufname, $ubio);
			if($status){
				header('location: ../views/home.php');			
			}else{
				header('location: ../views/editprofile.php');
			}
			
		}else{
			echo "null submission";
		}
	}
?>