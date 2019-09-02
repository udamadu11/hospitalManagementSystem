<!DOCTYPE html>
<?php include('include/connection.php') ?>
<html>
<head>
	<title>login to Hospital</title>
</head>
<body>
	<form method="post">
		<input type="text" name="username" placeholder="username" required>
		<input type="email" name="email" placeholder="email" required>
		<input type="number" name="phone" placeholder="Phone Number" required>
		<input type="password" name="password" placeholder="password" required>
		<input type="password" name="Cpassword" placeholder="Confirm password" required>
		<input type="submit" name="submit" value="Sign Up">

		<?php

			if (isset($_POST['submit'])) {
					$username = $_POST['username'];
					$email = $_POST['email'];
					$phone = $_POST['phone'];
					$password = $_POST['password'];
					$Cpassword = $_POST['Cpassword'];

				if ($password == $Cpassword) {
					$query = "INSERT INTO users(username,email,phone,password)VALUES('$username','$email','$phone','$password')";
					$runQuery = mysqli_query($con,$query);
					echo "<script>alert('Regisration Success!')</script>";
				}
					
				else{
					echo "<script>alert('password not match!')</script>";
				}
				
			}
		?>
	</form>
</body>
</html>