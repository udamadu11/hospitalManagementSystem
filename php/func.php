<?php 
include('connection.php');
if (isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$appoitment = $_POST['appoitment'];
	$query = "INSERT INTO appoitment(fname,lname,email,contact,appoitment)VALUES('$fname','$lname','$email','$contact','$appoitment')";
	$result = mysqli_query($con,$query);
	if ($result) {
		echo "<script>alert('Appoitment Registered')</script>";
		echo "<script>window.open('adminPanel.php','_self')</script>";
	}else{
		echo "<script>alert('There is some Errors')</script>";
	}
}


if (isset($_POST['submit2'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$designation= $_POST['designation'];
	$query = "INSERT INTO staff(fname,lname,address,email,contact,designation)VALUES('$fname','$lname','$address','$email','$contact','$designation')";
	$result = mysqli_query($con,$query);
	if ($result) {
		echo "<script>alert('Appoitment Registered')</script>";
		echo "<script>window.open('adminPanel.php','_self')</script>";
	}else{
		echo "<script>alert('There is some Errors')</script>";
	}
}


?>