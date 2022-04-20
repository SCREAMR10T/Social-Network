<?php
if(!isset($_SESSION)){
    session_start();
   }
    require_once('../models/db.php');
    $username=$_POST['username'];

    $con=getConnection();
    $sql = "SELECT SUM(rate) FROM request WHERE provider='{$username}'" ;

    $result= mysqli_query($con, $sql);

   $row=mysqli_fetch_assoc ($result);
   echo "$ ". $row['SUM(rate)'];
        

?>