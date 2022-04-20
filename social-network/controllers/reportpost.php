<?php
if(!isset($_SESSION)){
    session_start();
   }
    require_once('../models/db.php');
    $json = $_POST['data'];
	$obj = json_decode($json);

    $con=getConnection();
    $sql = "INSERT INTO reports (provider, posttitle, reason, reporter) VALUES ('$obj->sp', '$obj->postt', '$obj->rr', '$obj->ru')" ;

    if ($result= mysqli_query($con, $sql)) {
        echo "Your Report Has Been Successfully Received!";
    }
    else {
        echo "Something Went Wrong. Please Try Again!";
    }
        
?>