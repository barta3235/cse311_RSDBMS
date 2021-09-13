<?php
  
  session_start();
  if(!isset($_SESSION['Name'])) {
      header("Location: ./admin.html");
  }


  include("connection.php");
  $rc = $_GET['id'];
  $sql = "delete from rentcar where id='$rc'";
  $delete = mysqli_query($conn, $sql);
  if ($delete) {
    echo "<script>window.open('./adminwork1.php?del=Vehicle application has been deleted','_self')</script>";
  }
?>
?>

