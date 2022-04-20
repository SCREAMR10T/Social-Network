<?php
if(!isset($_SESSION)) {
    session_start();
    if ($_SESSION['a'] == null) {
        header('location: ../views/login.php');
    }
}
?>

<html>

<head>
    <title>Setup Your Profile</title>
    <link rel="icon" type="image/x-icon" href="../assets/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter" rel="stylesheet">
    <link href="onboard.css" rel="stylesheet">
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    <div align="center">
        <h2>Setup Your Profile</h2>
        <form name="onform" action="../controllers/profilec.php" enctype="multipart/form-data" method="post" onsubmit="return ovalid()">
            <p> Upload Profile Picture </p>
            <input type="file" name="pp" accept="image/*" onchange="typing()">
            <p class="warn" id="msg1"></p>
            <input type="text" name="fname" placeholder="Your Full Name" onkeyup="typing()">
            <p class="warn" id="msg2"></p>
            <textarea name="bio" placeholder="Write Your Bio Here" onkeyup="typing()"></textarea>
            <p class="warn" id="msg3"></p>
            <input type="submit" name="submit" value="Save & Continue">
        </form>
    </div>   
</body>

</html>