<?php
if(!isset($_SESSION)){
    session_start();
   }
    require_once('../models/db.php');
    $username=$_POST['username'];

    $con=getConnection();
    $sql = "SELECT COUNT(*) FROM post WHERE provider='{$username}'" ;

    $result= mysqli_query($con, $sql);

    $row=mysqli_fetch_assoc ($result);
    echo "Live Services: ". $row['COUNT(*)'];
        

?>