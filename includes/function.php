<?php  

function emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat){
	$result;
	if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdrepeat)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function invalidUsername($username){
	$result;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function invalidEmail($email){
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function pwdMatch($pwd, $pwdrepeat){
	$result;
	if ($pwd != $pwdrepeat) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function usernameExists($conn, $username, $email){
$sql = "SELECT * FROM users WHERE username = ? OR email = ?";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
	header("Location: ../signup.php?error=StatementFailed");
	exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
	}

mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd){
$sql = "INSERT INTO users(name, email, username, password) VALUES (?, ?, ?, ?)";
$stmt = mysqli_stmt_init($conn);

		if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../signup.php?error=TheStatementFailed");
		exit();	
		}

	$hashedPWd = password_hash($pwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPWd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("Location: ../signup.php?error=none");
	exit();	
}

function emptyInputLogin($username, $pwd){
	$result;
	if (empty($username) || empty($pwd)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function loginUser($conn, $username, $pwd){
	$usernameExists = usernameExists($conn, $username, $username);
 
 if ($usernameExists === false) {
 	header("Location: ../login.php?error=WrongLogin");
 	exit();
 }

 $hashedPwd = $usernameExists['password'];
 $checkPwd = password_verify($pwd, $hashedPwd);

 if ($checkPwd === false) {
 	header("Location: ../login.php?error=WrongLogin");
 	exit();
 }
 else if ($checkPwd === true){
 session_start();

 	$_SESSION['userid'] = $usernameExists['id'];
 	$_SESSION['useruid'] = $usernameExists['name'];
 	header("Location: ../index.php"); //palitan mo yung destination page
 	exit();
 }
}

function emptyInputAdmin($admin, $pwd){
	$result;
	if (empty($admin) || empty($pwd)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}