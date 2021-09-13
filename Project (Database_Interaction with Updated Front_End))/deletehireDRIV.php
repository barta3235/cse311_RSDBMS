<?php
  
  session_start();
  if(!isset($_SESSION['Name'])) {
      header("Location: ./admin.html");
  }


  include("connection.php");
  $hd = $_GET['id'];
  $sql = "delete from hiredriver where id='$hd'";
  $delete = mysqli_query($conn, $sql);
  if ($delete) {
    echo "<script>window.open('./adminwork1.php?del=Driver application has been deleted','_self')</script>";
  }
?>
?>

