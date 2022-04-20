<?php
if(!isset($_SESSION)) {
    session_start();
    if ($_SESSION['b'] == null) {
        header('location: ../views/login.php');
    }
}
?>

<html>

<head>
    <title>Edit Your Profile</title>
    <link rel="icon" type="image/x-icon" href="../assets/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter" rel="stylesheet">
    <link href="editprofile.css" rel="stylesheet">
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    <div align="center">
        <h2>Update Your Profile</h2>
        <form name="predit" action="../controllers/profileu.php" enctype="multipart/form-data" onsubmit="return prvalid()" method="post">
            <p> Upload New Profile Picture </p>
            <input type="file" name="pp" accept="image/*" onchange="typing()">
            <p class="warn" id="msg1"></p>
            <input type="text" name="fname" value="<?= $_GET['fullname']; ?>" onkeyup="typing()">
            <p class="warn" id="msg2"></p>
            <input name="bio" value="<?= $_GET['bio']; ?>" onkeyup="typing()">
            <p class="warn" id="msg3"></p>
            <input type="submit" name="submit" value="Save Changes">
            <br>
            <a href="home.php">Go Back</a>
        </form>
    </div>
</body>

</html>