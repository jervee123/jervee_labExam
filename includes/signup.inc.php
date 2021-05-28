<?php 
	if(isset($_POST['submit'])) {

		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['Uid'];
		$pwd = $_POST['pword'];
		$pwdrepeat = $_POST['pwordrepeat'];

	require_once 'dbconn.php';
	require_once 'function.php';

			if (emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat) !== false) {
				header("Location: ../signup.php?error=emptyinput");
				exit();
			}
			if (invalidUsername($username) !== false) {
				header("Location: ../signup.php?error=InvalidUsername");
				exit();	
			}
			if (invalidEmail($email) !== false) {
				header("Location: ../signup.php?error=InvalidEmail");
				exit();	
			}
			if (pwdMatch($pwd, $pwdrepeat) !== false) {
				header("Location: ../signup.php?error=PasswordNotMatch");
				exit();	
			}
			if (usernameExists($conn, $username, $email) !== false) {
				header("Location: ../signup.php?error=UsernameOrEmailAreAlreadyTaken");
				exit();
			}

		createUser($conn, $name, $email, $username, $pwd);
}
	else {
		header("Location: ../signup.php");
		exit();
	}
?>