<?php
if(!isset($_SESSION)){
    session_start();
   }
    require_once('../models/db.php');
    $username=$_POST['username'];

    $con=getConnection();
    $sql = "SELECT * FROM profile where uname='{$username}'";

    $result= mysqli_query($con, $sql);

    while ($row=mysqli_fetch_assoc ($result)) {
        echo "<img src='../assets/".$row['images']."'>";
        echo "<h6>".$row['fname']."</h6>";
        echo "<h5>"."Service Provider"."</h5>";
        echo "<p id='profiled'>".$row['bio']."</p>";
    }
        
?>
