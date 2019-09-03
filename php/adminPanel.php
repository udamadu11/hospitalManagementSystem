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
		<div class="col-md-3">
			<div class="list-group">
				<a href="" class="list-group-item" style="background-color: #3498DB;color: #ffffff;">Pateints</a>
				<a href="pateintDetails.php" class="list-group-item">pateint Details</a>
				<a href="" class="list-group-item">Add New Pateint</a>
				<a href="" class="list-group-item">Payment / Checkout</a>
			</div>
			<hr>
			<div class="list-group">
				<a href="" class="list-group-item" style="background-color: #3498DB;color: #ffffff;">Staff</a>
				<a href="staffDetails.php" class="list-group-item">Staff Details</a>
				<a href="addStaff.php" class="list-group-item">Add new Staff</a>
				<a href="" class="list-group-item">Remove Staff Member</a>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color: #3498DB;color: #ffffff;">
					<h3>Book An Appoitment</h3>
				</div>
				<div class="card-body">
					<form class="form-group" action="func.php" method="post">
						<label>First Name :</label>
						<input type="text" name="fname" class="form-control" required><br>
						<label>Last Name :</label>
						<input type="text" name="lname" class="form-control" required><br>
						<label>Email :</label>
						<input type="text" name="email" class="form-control" required><br>
						<label>Contact :</label>
						<input type="text" name="contact" class="form-control" required><br>
						<label>Doctor Appoitment :</label>
						<select class="form-control" name="appoitment">
							<option value="Dr AA From 6pm to 8pm">Dr AA From 4pm to 8pm</option>
							<option value="Dr BB From 4pm to 8pm">Dr BB From 4pm to 8pm</option>
						</select><br>
						<input type="submit"class="btn btn-primary" name="submit" value="Enter Appoitment">
					</form>
				</div>
			</div>
		</div>
	</div>	
</div>
</body>
</html>