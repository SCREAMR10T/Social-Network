<html>

<head>
    <title>Login to your account</title>
    <link rel="icon" type="image/x-icon" href="../assets/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter" rel="stylesheet">
    <link href="login.css" rel="stylesheet">
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    <div align="center">

        <img src="../assets/logo.png" alt="Site Logo">
        <h2>Login to your account</h2>
        <form name="loginform" action="../controllers/logincheck.php" method="post" onsubmit="return lvalid()">
            <input type="text" name="username" placeholder="Enter Username" onkeyup="typing()" size="50">
            <p class="warn" id="msg1"></p>
            <input type="password" name="password" placeholder="Enter Password" onkeyup="typing()" size="50">
            <p class="warn" id="msg2"></p>
            <?php 
	          $error = "";
            	if(isset($_GET['msg'])){
	             	if($_GET['msg'] == 'error'){
		            	echo "<p class=".'warn'.">".'Invalid Username/Password'."</p>";
	            	}
            	}
            ?>
            <input type="submit" name="submit" value="Login">
            <p> Don't have an account? <a href="reg.php">Create an account</a> </p>
        </form>

    </div>
</body>

</html>