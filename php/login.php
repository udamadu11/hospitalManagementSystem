<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="jumbotron" style="background:url('../images/hospital.jpeg') no-repeat;background-size: cover;height: 250px;"></div>
<div class="container-fluid">
	<div class="row">
		
		<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color: #3498DB;color: #ffffff;">
					<h3>Login Here</h3>
				</div>
				<div class="card-body">
					<form class="form-group" method="post">
						<label>Email :</label>
						<input type="text" name="email" class="form-control" required><br>
						<label>Password :</label>
						<input type="text" name="password" class="form-control" required><br>
						<input type="submit"class="btn btn-primary" name="submit" value=" Login">
					</form>
				</div>
			</div>
		</div>
	</div>	
</div>
</body>
</html>
<?php
	include('connection.php');
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = "SELECT * FROM users WHERE email ='$email' AND password ='$password'";
		$result = mysqli_query($con,$query);
		header('Location:adminPanel.php');
	}

 ?>