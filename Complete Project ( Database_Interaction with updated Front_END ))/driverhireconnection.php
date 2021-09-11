<?php

 include('./connection.php');

 $fname = $_POST['fn'];
 $lname =  $_POST['ln'];
 $age = $_POST['a'];
 $gender = $_POST['g'];
 $mobile = $_POST['mn'];
 $nid = $_POST['nn'];
 $license = $_POST['ln'];
 $email= $_POST['e'];
 $experience = $_POST['ex'];

 $insert_val = "insert into hiredriver (FirstName, LastName, 	Birthdate, 	Gender, MobileNumber, NID, 	LicenseNumber, Email,	Experience)
 values ('$fname', '$lname', '$age ', '$gender', ' $mobile', ' $nid', ' $license', ' $email', '$experience')";

 if(mysqli_query($conn, $insert_val)){
   echo "<script>window.confirm('Thank you for applying at neueTour! You will be notified for further inspection via email')</script>";
   echo "<script>window.open('./Home.html', '_self')</script>";
 }else {
   echo "<script>window.open('./driverhire.html', '_self')</script>";
   
}




 ?>