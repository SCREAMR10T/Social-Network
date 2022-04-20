<?php 
	if(!isset($_SESSION)){
		session_start();
	   }
	include('../models/usermodel.php');
	$uname = $_SESSION['b'];
	
	if(isset($_REQUEST['submit'])){

        $postv=$_POST['postid'];
        $ptitle=$_POST['title'];
        $pdesc=$_POST['pdesc'];
        $rate=$_POST['charge'];

		if($postv != null && $ptitle != null && $pdesc != null && $rate != null){

			$status = editpost($postv, $ptitle, $pdesc, $rate);
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