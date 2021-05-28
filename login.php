<!DOCTYPE html>
<html lang="en">
<head>
  <title>STUDENT PORTAL</title>
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
	<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-lg-0" role="navigation">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">
      	<img src="AISAT.png" alt="Logo" style="width:100px; border-radius: 50%;">
      </a>
    </div>
		<nav>
		<div class="topnav">
			<ul class="navbar-nav">
			<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
			<li class="nav-item"><a class="nav-link" href="login.php">Log In</a></li>
			</ul>
		</div>
</nav>
	</nav>
<div class="login-form">
    <form action="includes/login.inc.php" method="post">
    	<img src="download.png" class="avatar">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="uid" placeholder="Username/Email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="pwd" placeholder="Password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="login">Log in</button>
        </div>
        <p class="text-center"><a href="signup.php">Create an Account</a></p>
</div>       
    </form>
<!-- 
empty input -->
<?php
if (isset($_GET['error'])) {
	if ($_GET['error'] == "emptyinput") {
		echo "<center><div class='bg-warning'"."<p>Fill up all!</p>"."</div></center>";
		}
		 elseif ($_GET['error'] == "WrongLogin") {
		 	echo "<center><div class='bg-danger'"."<p>Incorrect Inputs!</p>"."</div></center>";
		 	}
}
?>
<script>
	
$(document).ready(function(){
  $("#myBtn").click(function(){
    $('.toast').toast('show');
  });
});

</script>
</body>
</html>