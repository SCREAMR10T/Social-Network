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
    <title>Welcome Service Provider</title>
    <link rel="icon" type="image/x-icon" href="../assets/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter" rel="stylesheet">
    <link href="home.css" rel="stylesheet">
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    <div>
        <div class="leftbox">
            <div class="logo">
                <img src="../assets/logo.png" alt="Site Logo">
            </div>
            <div class="topnav">
                <a href="home.php" class="active"> <img src="../assets/home.svg" class="icon"> Home </a> <br>
                <a href="home.php"> <img src="../assets/user.svg" class="icon"> General </a> <br>
                <a href="home.php"> <img src="../assets/shopping-bag.svg" class="icon"> Commercial </a> <br>
                <a href="notification.php"> <img src="../assets/bell.svg" class="icon"> Notifications </a> <br>
                <a href="search.php"> <img src="../assets/search.svg" class="icon"> Search </a>
            </div>
            <div class="bottomnav">
                <a href="../controllers/logout.php"> <img src="../assets/log-out.svg" class="icon"> Logout </a>
            </div>
        </div>

        <div class="middlebox">
            <div class="mtopbar">
                <p>Feed</p>
            </div>
            <br>
            <div class="postbox">
                <form name="pform" action="../controllers/postcheck.php" method="post" onsubmit="return pvalid()">
                    <input type="text" name="title" placeholder="Your Service Title" onkeyup="typing()">
                    <p class="warn" id="msg1"></p>
                    <textarea name="pdesc" placeholder="Write Your Service Details Here" onkeyup="typing()"></textarea>
                    <p class="warn" id="msg2"></p>
                    <input type="number" name="charge" placeholder="Charging Rate" onkeyup="typing()" onchange="typing()">
                    <p id="rate"> Dollar </p>
                    <input type="submit" name="submit" value="Post">
                    <p class="warn" id="msg3"></p>
                </form>
            </div>
            <br>
            <hr>
            <div class="feedspace">
                <span id="posts"></span>
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
            ajax6();
        }; 
    </script>
</body>

</html>