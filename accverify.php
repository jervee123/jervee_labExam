<?php

function adminExists($conn, $admin ){
$sql = "SELECT * FROM admin_info WHERE adminName = ?";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
	header("Location: ../adminpage.php?error=StatementFailed");
	exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $admin);
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

function adminUser($conn, $admin, $pwd){
	$adminExists = adminExists($conn, $admin, $admin);

 if ($adminExists === false) {
 	header("Location: ../adminpage.php?error=WrongLogin");
 	exit();
 }

 $hashedpwd = $adminExists['password'];
 $checkedpwd = false;
 if ($hashedpwd === $pwd) {
 	$checkedpwd = true;
 }

 if ($checkedpwd === false) {
 	header("Location: ../adminpage.php?error=WrongLogin");
 	exit();
 }
 else if ($checkedpwd === true){
 session_start();

 	$_SESSION['userid'] = $adminExists['id'];
 	$_SESSION['useruid'] = $adminExists['adminName'];
 	header("Location: adminpage2.php"); //palitan mo yung destination page
 	exit();
 }
}
?>