<?php include ('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient Details</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="jumbotron" style="background:url('../images/ho.jpg') no-repeat;background-size: cover;height: 250px;"></div>
	<div class="container">
	<div class="card">
		<div class="card-body" style="background-color: #052C34;color: #ffffff;">
			<div class="row">
				<div class="col-md-1">
					<a href="adminPanel.php" class="btn btn-light">Back</a>
				</div>	
				<div class="col-md-3">
						<h3>Patient Details</h3>
				</div>
				<div class="col-md-7">
					<form class="form-group" method="post" action="searchPateint.php">
						<div class="row">
						<div class="col-md-10">
							<input type="text" name="search" class="form-control" placeholder="Enter Contact" required="">
						</div>
						<div class="col-md-1">
							<input type="submit" name="submit" class="btn btn-light" value="Search">
						</div>
					</div>
					</form>
					
					
					
				</div>
			</div>
		</div>

		<div class="card-body">
<table class="table">
  <caption>List of Patients</caption>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Appoitment</th>
    </tr>
  </thead>
  <tbody>
   <?php 
   		$query = "SELECT * FROM appoitment";
   		$result = mysqli_query($con,$query);
   		while ($row = mysqli_fetch_array($result)) {
   			echo "
   				<tr>
   					<td>".$row['id']."</td>
   					<td>".$row['fname']."</td>
   					<td>".$row['lname']."</td>
   					<td>".$row['email']."</td>
   					<td>".$row['contact']."</td>
   					<td>".$row['appoitment']."</td>
   				</tr>

   			";
   		}
   		

   ?>
  </tbody>
</table>
		</div>
	</div>
			
		
	</div>

</body>
</html>