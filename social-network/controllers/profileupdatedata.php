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
        echo "<a href=".'editprofile.php?fullname='.urlencode($row['fname']).'&amp;bio='.urlencode($row['bio']).">Update</a> <br>"; 
    }
        
?>