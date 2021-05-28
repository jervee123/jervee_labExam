<?php

if (isset($_POST['login'])) {

	$username = $_POST['uid'];
	$pwd = $_POST['pwd'];

	require_once 'dbconn.php';
	require_once 'function.php';


			 if (emptyInputLogin($username, $pwd) !== false) {
			 	header("Location: ../login.php?error=emptyinput");
			 	exit();
			 }

	loginUser($conn, $username, $pwd);
}
else {
	header("Location: ../login.php");
	exit();
}
?>