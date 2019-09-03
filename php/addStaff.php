<?php include ('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add staff</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="jumbotron" style="background:url('../images/hospital.jpeg') no-repeat;background-size: cover;height: 250px;"></div>
	<div class="container">
	<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color: #3498DB;color: #ffffff;">
					<div class="row">
				<div class="col-md-2">
					<a href="adminPanel.php" class="btn btn-light">Back</a>
				</div>	
				<div class="col-md-5">
						<h3>Add Staff</h3>
				</div>
			</div>
				</div>
				<div class="card-body">
					<form class="form-group" action="func.php" method="post">
						<label>First Name :</label>
						<input type="text" name="fname" class="form-control" required><br>
						<label>Last Name :</label>
						<input type="text" name="lname" class="form-control" required><br>
						<label>Address :</label>
						<input type="text" name="address" class="form-control" required><br>
						<label>Email :</label>
						<input type="text" name="email" class="form-control" required><br>
						<label>Contact :</label>
						<input type="text" name="contact" class="form-control" required><br>
						<label>Designation :</label>
						<select class="form-control" name="designation">
							<option value="physician">Physician</option>
							<option value="nurse">Nurse</option>
							<option value="therapist">Therapist</option>
							<option value="dietician">Dietician</option>
						</select><br>
						<input type="submit"class="btn btn-primary" name="submit2" value="Add">
					</form>
				</div>
			</div>
		</div>
</body>
</html>
