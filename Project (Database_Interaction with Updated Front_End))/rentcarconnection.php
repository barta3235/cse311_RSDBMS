<?php

 include('./connection.php');

 $name = $_POST['on'];
 $number =  $_POST['mn'];
 $address = $_POST['ad'];
 $Email = $_POST['em'];
 $vehicletype = $_POST['vt'];
 $modelname = $_POST['mn'];
 $modelyear = $_POST['my'];
 $register= $_POST['rn'];

 $insert_val = "insert into rentcar (OwnerName, MobileNumber, Address, 	Email, VehicleType, ModelName, 	ModelYear, RegistrationNumber)
 values ('$name', '$number', ' $address', '$Email', '$vehicletype', '$modelname', '$modelyear', '$register')";

 if(mysqli_query($conn, $insert_val)){
   echo "<script>window.confirm('You will be notified for further inspection via email, Thank you!')</script>";
   echo "<script>window.open('./Home.html', '_self')</script>";
 }else {
   echo "<script>window.open('./rentcar.html', '_self')</script>";
   
}


?>