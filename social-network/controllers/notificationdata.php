<?php
if(!isset($_SESSION)){
    session_start();
   }
    require_once('../models/db.php');
    $username=$_POST['username'];

    $con=getConnection();
    $sql = "SELECT * FROM request where provider='{$username}' ORDER BY time DESC";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
            $notifytime= $row['time'];
            echo "<div class="."post".">";
            echo "<h7>".$row['buyer']." has bought your service! | ".date('F j, Y. g:i a', strtotime($notifytime))."</h7>";
            echo "<hr>";
            echo "<h6>".$row['postt']."</h6>";
            echo "<h5> For $".$row['rate']."</h5>";
            echo "</div>";
    }
?>