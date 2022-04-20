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
    <title>Report Post To Admin</title>
    <link rel="icon" type="image/x-icon" href="../assets/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter" rel="stylesheet">
    <link href="reportpage.css" rel="stylesheet">
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    <div class="form" align="center">
        <h2>Report To Admin</h2>
        <form method="post" onsubmit="reportvalid()">
            <div>
            <label>Post Title</label> <br>
            <input type="text" id="title" value="<?= $_GET['posttitle']; ?>" disabled>
            </div>
            <div>
            <label>Service Provider</label> <br>
            <input type="text" id="provider" value="<?= $_GET['provider']; ?>" disabled>
            </div>
            <div>
            <label>Tell us what is wrong with the post?</label> <br>
            <input type="text" id="reason" placeholder="Write your reason here">
            </div>
            <div>
            <label>Reported By</label> <br>
            <input type="text" id="reporter" value="<?= $_SESSION['b'] ?>" disabled>
            </div>
            <div>
            <input type="submit" name="submit" value="Report Post">
            <br>
            <a href="home.php">Go Back</a>
        </form>
    </div>
</body>

</html>