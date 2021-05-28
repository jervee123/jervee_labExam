<!DOCTYPE html>
<html lang="en">
<head>
  <title>STUDENT PORTAL</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="style.css">
 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
 <!-- Popper JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 
 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
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
.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
[type=submit]{
    margin-left: 230px;
    margin-top: 275px;
    width: 84px;
    height: 40px;   
    font-size:14px;
    font-weight:700;

}
</style>


</head>
<body class="bg-light">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <a class="navbar-brand" href="index.php">
      	<img src="AISAT.png" alt="Logo" style="width:100px; border-radius: 50%;">
      </a>
	<nav>
		<div>
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="login.php">Log In</a></li>
			</ul>
		</div>
	</nav>

</nav>

	<section>
		<h2>Sign Up</h2>
<div class="form-group">
<form action="includes/signup.inc.php" method="post" class="bg-light">
			 <div class="form-group">
			<input type="text" name="name" class="form-control" placeholder="Name..." ><br>
		</div>

			 <div class="form-group">
			<input type="text" name="email" class="form-control" placeholder="Email..." ><br>
		</div>

			 <div class="form-group">
			<input type="text" name="Uid" class="form-control" placeholder="Username..." ><br>
		</div>

			 <div class="form-group">
			<input type="password" name="pword" class="form-control" placeholder="Password..." ><br>
		</div>

			 <div class="form-group">
			<input type="password" name="pwordrepeat" class="form-control" placeholder="Repeat Password..." ><br>
		</div>

			<div class="form-group">
			<button type="submit" class="btn btn-primary vertical-center form-control" name="submit">Submit</button>
		</div>
</div>

</div>
</form>
</section>
<?php 
if (isset($_GET['error'])) {
	if ($_GET['error'] == "emptyinput") {
		echo "<center><div class='bg-warning'"."<p>Fill up all!</p>"."</div></center>";
		}
		elseif ($_GET['error'] == "InvalidUsername") {
			echo "<center><div class='bg-warning'"."<p>Choose a proper Username!</p>"."</div></center>";
			}
			elseif ($_GET['error'] == "InvalidEmail") {
				echo "<center><div class='bg-warning'"."<p>Choose a proper Email!</p>"."</div></center>";
				}
				elseif ($_GET['error'] == "PasswordNotMatch") {
					echo "<center><div class='bg-warning'"."<p>Password not match!</p>"."</div></center>";
					}
			elseif ($_GET['error'] == "stmtfailed") {
				echo "<center><div class='bg-warning'"."<p>Some went wrong!</p>"."</div></center>";
				}
		elseif ($_GET['error'] == "UsernameOrEmailAreAlreadyTaken") {
			echo "<center><div class='bg-warning'"."<p>Username already taken!</p>"."</div></center>";
			}
elseif ($_GET['error'] == "none") {
	echo "<center><div class='bg-success'"."<p>Successfully signed up!</p>"."</div></center>";
	}
}
?>
</body>
</html>