<?php
session_start();

?>
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
</head>
<body>
	
<div>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
    <div class="navbar-header">
    <a class="navbar-brand" href="index.php">
      <img src="download.png" alt="Logo" style="width:40px; border-radius: 50%;">
  	</a>
    </div>
		<div class="nav navbar-nav">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link disabled" href="#"><?php 
				if (isset($_SESSION['useruid'])) {
					echo $_SESSION['useruid'];
				}
				?></a></li>
				<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
				<?php if (isset($_SESSION['useruid'])) {
					echo "<li class='nav-item'><a class='nav-link' href='profile.php'>Profile</a></li>";
					echo "<li class='nav-item'><a class='nav-link' href='logout.php'>Logout</a></li>";
				}
				else {
					echo "<li class='nav-item'><a class='nav-link' href='about.php'>About</a></li>";
					echo "<li class='nav-item'><a class='nav-link' href='login.php'>Log In</a></li>";
				}
				?>
			</ul>
		</div>
	</nav>
</div>

<div class="row">
    <div class="col" style="background-color:lavender;">
   <center> <h3>Balance: P 0.00</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
   </center>
   </div>

    <div class="col" style="background-color:lavender;">
   <center> <h3>Section</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
   </center>
   </div>

   <div class="col" style="background-color:lavender;">
   <center> <h3>Subjects</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
   </center

</div>

</body>
</html>