<?php
if(!isset($_SESSION)){
    session_start();
   }
    require_once('../models/db.php');
    $search=$_POST['search'];

    $con=getConnection();
    $sql = "SELECT * FROM profile where uname='$search'";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
            echo "<div class="."post".">";
            echo "<div class="."pp".">";
            echo "<img src='../assets/".$row['images']."'>";
            echo "</div>";
            echo "<h7>".$row['fname']."</h7>";
            echo "<h6>".$row['bio']."</h6>";
            echo "</div>";          
        }
?>