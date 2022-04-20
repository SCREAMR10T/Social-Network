<html>

<head>
    <title>Create a new account</title>
    <link rel="icon" type="image/x-icon" href="../assets/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter" rel="stylesheet">
    <link href="reg.css" rel="stylesheet">
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    <div align="center">
        <img src="../assets/logo.png" alt="Site Logo">
        <h2>Create a new account</h2>
        <form name="regform" action="../controllers/regcheck.php" method="post" onsubmit="return rvalid()">
            <input type="text" name="username" placeholder="Enter Username" onkeyup="typing()" size="50">
            <p class="warn" id="msg1"></p>
            <input type="text" name="email" placeholder="Enter Email" onkeyup="typing()" size="50">
            <p class="warn" id="msg2"></p>
            <input type="password" name="password" placeholder="Enter Password" onkeyup="typing()" size="50">
            <p class="warn" id="msg3"></p>
            <input type="submit" name="submit" value="Register">
            <p> Already registered? <a href="login.php">Login Here</a> </p>
        </form>

    </div>
</body>

</html>