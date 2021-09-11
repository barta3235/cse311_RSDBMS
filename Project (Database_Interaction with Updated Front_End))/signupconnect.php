<?php

	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$birthdate = $_POST['birthdate'];
	$gender = $_POST['gender'];
	$number = $_POST['mobilenumber'];
	$caddress = $_POST['cityaddress'];
    $saddress = $_POST['streetaddress'];
    $email = $_POST['email'];

	if ($firstName == '') {
		echo "<script>alert('Please enter the First Name')</script>";
		echo "<script>window.open('./SignUp.html','_self')</script>";
		exit();
	  }
	  if ($lastName == '') {
		echo "<script>alert('Please enter the Last Name')</script>";
		echo "<script>window.open('./SignUp.html','_self')</script>";
		exit();
	  }
	  if ($birthdate == '') {
		echo "<script>alert('Please enter Date Of Birth')</script>";
		echo "<script>window.open('./SignUp.html','_self')</script>";
		exit();
	  }
	  if ($gender == '') {
		echo "<script>alert('Please enter gender')</script>";
		echo "<script>window.open('./SignUp.html','_self')</script>";
		exit();
	  }
	  if ($number == '') {
		echo "<script>alert('Please enter the Mobile Phone Number')</script>";
		echo "<script>window.open('./SignUp.html','_self')</script>";
		exit();
	  }
	  if ($caddress == '') {
		echo "<script>alert('Please enter both City and Street Address')</script>";
		echo "<script>window.open('./SignUp.html','_self')</script>";
		exit();
	  }
	  if ($saddress == '') {
		echo "<script>alert('Please enter both City and Street Address')</script>";
		echo "<script>window.open('./SignUp.html','_self')</script>";
		exit();
	  }
	  if ($email == '') {
		echo "<script>alert('Please enter email')</script>";
		echo "<script>window.open('./SignUp.html','_self')</script>";
		exit();
	  }
    

	// Database connection
	$conn = new mysqli('localhost','root','','rsdb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into customer(Fname, Lname, Birthdate, Gender, MobileNumber, CityAddress, StreetAddress, Email) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssisss", $firstName, $lastName, $birthdate, $gender, $number, $caddress, $saddress, $email);
		$execval = $stmt->execute();
		/*echo $execval;*/
		
		$stmt->close();
		$conn->close();
        
		echo "<script>alert('You have succesfully Registered yourself')</script>";
		echo "<script> window.location.href='./Home.html' </script>";

	}  
?>