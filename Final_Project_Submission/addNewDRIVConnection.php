<?php
  include('./connection.php');

  $i = $_POST['ind'];
  $fn = $_POST['fnnd'];
  $ln = $_POST['lnnd'];
  $age = $_POST['bnd'];
  $gen = $_POST['gnd'];
  $nid = $_POST['mnnd'];
  $lnum = $_POST['cand'];
  $dn = $_POST['sand'];
  $pw = $_POST['pndd'];

  if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into driver( DriverID, FirstName, LastName, Age, Gender, NID , LicenseNumber, DriverMobile, Password) values(?,?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issisiiis", $i, $fn, $ln, $age, $gen, $nid, $lnum, $dn, $pw);
    $execval = $stmt->execute();
    /*echo $execval;*/
    
    $stmt->close();
    $conn->close();
    
    echo "<script>alert('New Driver Added To Database')</script>";
    echo "<script> window.location.href='./adminwork1.php' </script>";

}  


?>
