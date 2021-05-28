<?php
session_start();
require_once 'dbconn.php';

$id = 0;
$update = false;
$name = '';
$email = '';
$uname = '';
$pwd = '';


if (isset($_POST['submit'])) {
	
	$admin = $_POST['admin'];
	$pwd = $_POST['pwd'];


require_once 'function.php';
require_once '../accverify.php';


if (emptyInputAdmin($admin, $pwd) !== false) {
				header("Location: ../adminpage.php?error=emptyinput");
				exit();
			}

adminUser($conn, $admin, $pwd);
}
$sql = "SELECT * FROM users";
$result99 = mysqli_query($conn, $sql);

$row99 = mysqli_fetch_assoc($result99);


if (isset($_GET['delete'])) {
	$id = $_GET['delete'];

	$conn->query("DELETE FROM users WHERE id=$id") or die($conn->error());

		$_SESSION['message'] = "Record Successfully Deleted!";
		$_SESSION['msg_type'] = "Danger!";

	header("Location: adminpage2.php");
}

if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	// $update = true;
	$sql = $conn->query("SELECT * FROM users WHERE id=$id") or die($conn->error());

	// if (isset($sql) == 1) {
		$row = $sql->fetch_array();
		$id = $row['id'];
		$name = $row['name'];
		$email = $row['email'];
		$uname = $row['username'];
		$pwd = $row['password'];
	// }
}

if(isset($_POST['update'])){
	$id = $_POST['id']; 
	$name = $_POST['name']; 
	$email = $_POST['email'];
	$username = $_POST['username']; 
    $password = $_POST['password'];
	$hashedpassword = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query($conn, "UPDATE users SET name = '$name', email = '$email', username = '$username', password = '$hashedpassword' WHERE id = '$id'");
	header("location: adminpage2.php");
	}


?>
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
 
</head>
<body>

<?php echo "Welcome ". "Admin"; ?>
<br>
<a class="btn btn-primary" href="../logoutadmin.php" style="float: right;">Logout</a>
<br>

	<?php if (isset($_SESSION['message'])):?>

<div class="alert alert-<?php=$_SESSION['msg_type']?>">

	<?php
	echo $_SESSION['message'];
	unset($_SESSION['message']);
	?>
</div>
	<?php endif; ?>
<table class="table table-hover">
  <thead>
    <tr>
     <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th colspan="2">Action</th>
    </tr> 
  </thead>
  <tbody>
  <?php while($row99 = mysqli_fetch_assoc($result99)):;?>

    <tr>

      <td><?php echo $row99['id']; ?></td>
      <td><?php echo $row99['name']; ?></td>
      <td><?php echo $row99['email']; ?></td>
      <td><?php echo $row99['username']; ?></td>
      <td><?php echo $row99['password']; ?></td>
      <td>


	  <a href="adminpage2.php?edit=<?php echo $row99['id']; ?>" class="btn btn-info">Edit</a>
	  <a href="adminpage2.php?delete=<?php echo $row99['id']; ?>" class="btn btn-danger">Delete</a>
	  </td>

    </tr>

   <?php endwhile; ?>
  </tbody>
</table>


<div class="row justify-content-center">
	<form action="adminpage2.php"  method="post">

		<div class="form-group">
		<input type="hidden" name="id" value="<?php echo $id; ?>" placeholder="Name">
	</div>

		<div class="form-group">
		<input type="text" name="name" value="<?php echo $name; ?>" placeholder="Name">
	</div>

		<div class="form-group">
		<input type="text" name="email" value="<?php echo $email; ?>" placeholder="Email">
	</div>

		<div class="form-group">
		<input type="text" name="username" value="<?php echo $uname; ?>" placeholder="Username">
	</div>

		<div class="form-group">
		<input type="password" name="password" value="<?php echo $pwd; ?>" placeholder="Password">
	</div>

		<div class="form-group">
			
	<button class="btn btn-info" type="submit" name="update">Update</button>
	</div>

	</form>
</div>
</body>
</html>