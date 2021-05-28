<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMIN</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
 <!-- Popper JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 
 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
 <style>
.login-form {
    width: 340px;
    margin: 80px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
.avatar{
    width: 90px;
    height: 90px;
    border-radius: 50%;
    position: absolute;
    top: 15%;
    left: calc(50% - 50px);
}
</style>
</head>
<body>
    <div class="login-form">
<form action="includes/adminpage2.php" method="post">
    	<h2 class="text-center">Admin Log in</h2>
	<div class="form-group">
		<input type="text" name="admin" class="form-control" placeholder="Admin">
	</div>
	<div class="form-group">
		<input type="password" name="pwd" class="form-control" placeholder="Password">
	</div>
<button type="submit" class="btn btn-primary btn-block" name="submit">Log In</button>
</form>
</div>
<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == "emptyinput") {
        echo "<p>Fill up all!</p>";
        }
         elseif ($_GET['error'] == "WrongLogin") {
            echo "<p>Incorrect Input!</p>";
            }
}
?>
</body>
</html>