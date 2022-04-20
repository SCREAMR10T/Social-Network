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
    <title>Your Notifications</title>
    <link rel="icon" type="image/x-icon" href="../assets/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter" rel="stylesheet">
    <link href="notification.css" rel="stylesheet">
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    <div>
        <div class="leftbox">
            <div class="logo">
                <img src="../assets/logo.png" alt="Site Logo">
            </div>
            <div class="topnav">
                <a href="home.php"> <img src="../assets/home.svg" class="icon"> Home </a> <br>
                <a href="home.php"> <img src="../assets/user.svg" class="icon"> General </a> <br>
                <a href="home.php"> <img src="../assets/shopping-bag.svg" class="icon"> Commercial </a> <br>
                <a href="notification.php" class="active"> <img src="../assets/bell.svg" class="icon"> Notifications </a> <br>
                <a href="search.php"> <img src="../assets/search.svg" class="icon"> Search </a>
            </div>
            <div class="bottomnav">
                <a href="login.php"> <img src="../assets/log-out.svg" class="icon"> Logout </a>
            </div>
        </div>

        <div class="middlebox">
            <div class="mtopbar">
                <p>Notifications</p>
            </div>
            <div>
            <span id="notifications"></span>
            </div>
        </div>

        <div class="rightbox">
            <div class="profile">
                <p>Your Profile</p>
                <span id="update"></span>
                <span id="profiledetails"></span>
            </div>
            <div class="amount">
                <p>Amount Earned</p>
                <h5>Lifetime Value</h5>
                <hr>
                <h6 id='h6'>$ N/A</h6>
            </div>
            <div class="stat">
                <p>Your Stats</p>
                <h5>Lifetime Value</h5>
                <hr>
                <h6 id='h5'>Total Posts: N/A</h6>
                <h6 id='h4'>Total Sales: N/A</h6>
            </div>
        </div>
    </div>
    <input id="username" type="text" value="<?= $_SESSION['b']; ?>" hidden>
    <script>
        window.addEventListener("load", myInit, true); function myInit(){ 
            ajax1();
            ajax2();
            ajax3();
            ajax4();
            ajax5();
            ajax7();
        }; 
    </script>
</body>

</html>