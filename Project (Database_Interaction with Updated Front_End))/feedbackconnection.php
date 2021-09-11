<?php
  
  include('./connection.php');
  
  $name = $_POST['fname'];
  $number =  $_POST['fmobile'];
  $email =  $_POST['femail'];
  $message =  $_POST['fmessage'];

  $check_mobilenumber = "select * from booking where MobileNumber='$number'";
  $run_query =  mysqli_query($conn, $check_mobilenumber);
  if (mysqli_num_rows($run_query) > 0) {

    $insert_val = "insert into feedback (Name, MobileNumber , Email, Message)
    values ('$name', '$number', '$email', ' $message')";
  
    if(mysqli_query($conn, $insert_val)){
      echo "<script>window.confirm('Thank you for helping us improve our service. Tschüss!')</script>";
      echo "<script>window.open('./Home.html', '_self')</script>";
    }else {
      echo "<script>window.open('./Home.html', '_self')</script>";
      
  }
  }else{
    echo "<script>alert('Sorry Dear customer, you havent booked any ride from neueTour. Please enter registered mobile number')</script>";
    echo "<script>window.open('./Home.html', '_self')</script>";
  }
?>