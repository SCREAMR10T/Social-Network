<?php 

	require_once('db.php');

	function login($username, $password){
		$con = getConnection();
		$sql = "select * from user where uname='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);

		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}

	function signup($username, $password, $email){
		$con = getConnection();
		$sql = "insert into user (uname, password, email) values('{$username}', '{$password}', '{$email}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
    }

    function profile($username, $image, $fname, $bio) {

        $con=getConnection();
        $sql = "INSERT INTO profile (uname, fname, images, bio) VALUES ('$username', '$fname', '$image', '$bio')";      

    	if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}

    }

    function pupdate($uname, $uimage, $ufname, $ubio) {

        $con=getConnection();
        $sql = "UPDATE `profile` SET fname='{$ufname}', images='{$uimage}', bio='{$ubio}' where uname='{$uname}'";      

    	if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}

    }

	function post($uname, $ptitle, $pdesc, $rate) {

        $con=getConnection();
        $sql = "INSERT INTO post (provider, ptitle, pdesc, rate) VALUES ('$uname', '$ptitle', '$pdesc', '$rate')";

    	if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}

    }

	function editpost($postv, $ptitle, $pdesc, $rate) {

        $con=getConnection();
        $sql = "UPDATE `post` SET ptitle='{$ptitle}', pdesc='{$pdesc}', rate='{$rate}' where postv='{$postv}'";      

    	if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}

    }

	function delpost($postv) {

        $con=getConnection();
        $sql = "DELETE FROM `post` where postv='{$postv}'" ;

    	if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}

    }

	function notify($buyer, $postt, $provider, $rate) {

        $con=getConnection();
        $sql = "INSERT INTO request (buyer, provider, postt, rate) VALUES ('$buyer', '$provider', '$postt', '$rate')" ;

    	if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}

    }

?>