<?php 
if(!isset($_SESSION)){
    session_start();
   }
	require_once('../models/usermodel.php');
    require_once ('../controllers/logincheck.php');
    $uname = $_SESSION['b'];

	if(isset($_REQUEST['submit'])){
		
		$ptitle = $_REQUEST['title'];
		$pdesc = $_REQUEST['pdesc'];
        $rate = $_REQUEST['charge'];

		if($ptitle != null && $pdesc != null && $rate != null){

			$status = post($uname, $ptitle, $pdesc, $rate);

				if($status){
					$_SESSION['status'] = true;
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../views/home.php');
				}else{
					header('location: ../views/home.php?msg=error');
				}
		}else{
			echo "null submission";
		}
	}
?>