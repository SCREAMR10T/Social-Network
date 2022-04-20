<?php 
if(!isset($_SESSION)){
    session_start();
   }
	require_once('../models/usermodel.php');
    require_once ('../controllers/logincheck.php');
    $buyer = $_SESSION['b'];
    $postt=$_GET['posttitle'];
    $provider=$_GET['provider'];
    $rate=$_GET['rate'];

		if($buyer != null && $postt != null && $provider != null && $rate != null){

			$status = notify($buyer, $postt, $provider, $rate);

				if($status){
					$_SESSION['status'] = true;
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../views/home.php');
				}else{
					header('location: ../views/home.php?msg=error');
				}

	}
?>