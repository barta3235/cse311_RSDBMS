<?php

   include('./connection.php');
   if (isset($_POST['abut'])) {
   
   $name = $_POST['adminname'];
	 $password = $_POST['adminpass'];

   if ($name == '') {
		echo "<script>alert('Please enter the name')</script>";
		echo "<script>window.open('./admin.html','_self')</script>";
		exit();
	  }
	  if ($password == '') {
		echo "<script>alert('Please enter the password')</script>";
		echo "<script>window.open('./admin.html','_self')</script>";
		exit();
	  }

    $check_user = "select * from admin where Name ='$name' AND Password='$password'";
    $query = mysqli_query($conn,$check_user );
    if(mysqli_num_rows($query)){
      session_start();
      $_SESSION['Name'] = $name;
  
      echo "<script>window.open('./adminwork1.php','_self')</script>";
  
    }else{
      echo "<script>alert('Email or password is incorrect, Enter correct name and password')</script>";
      echo "<script>window.open('./admin.html','_self')</script>";
    }
  
  }else {
    echo "<script>window.open('./admin.html','_self')</script>";
  }
  

?>