<?php
if(!isset($_SESSION)){
    session_start();
   }
    require_once('../models/db.php');
    $username=$_POST['username'];

    $con=getConnection();
    $sql = "SELECT * FROM post ORDER BY time DESC";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
            $notifytime= $row['time'];
            $postv= $row['postv'];
            $postt= $row['ptitle'];
            $postd= $row['pdesc'];
            $postr= $row['rate'];
            $provider= $row['provider'];
            if ($username == $row['provider']) {
                echo "<div class="."post".">";
                echo "<h7>"."You posted a service | ".date('F j, Y. g:i a', strtotime($notifytime))."</h7>";
                echo "<hr>";
                echo "<h6>".$row['ptitle']."</h6>";
                echo "<h5>".$row['pdesc']."</h5>";
                echo "<hr>";
                echo "<h3>"."Charging Rate:"."</h3>";
                echo "<h4>".$row['rate']." Dollar</h4>";
                echo "<hr>";
                echo "<a href=".'../views/editpost.php?postid='.$postv.'&amp;posttitle='.urlencode($postt).'&amp;postdesc='.urlencode($postd).'&amp;postrate='.urlencode($postr)."> Edit </a>";
                echo "<a id=delete href=".'../controllers/deletepost.php?postid='.$postv."> Delete </a>";
                echo "</div>";
            }
            else {
            echo "<div class="."post".">";
            echo "<h7>".$row['provider']." posted a service | ".date('F j, Y. g:i a', strtotime($notifytime))."</h7>";
            echo "<hr>";
            echo "<h6>".$row['ptitle']."</h6>";
            echo "<h5>".$row['pdesc']."</h5>";
            echo "<hr>";
            echo "<h3>"."Charging Rate:"."</h3>";
            echo "<h4>".$row['rate']."</h4>";
            echo "<hr>";
            echo "<a href=".'../controllers/notifycheck.php?buyer='.$username.'&amp;provider='.urlencode($provider).'&amp;rate='.urlencode($postr).'&amp;posttitle='.urlencode($postt)."> Buy Service </a>";
            echo "<a id=delete href=".'../views/reportpage.php?posttitle='.urlencode($postt).'&amp;provider='.urlencode($provider)."> Report Post </a>";
            echo "</div>";
            }
    }
?>