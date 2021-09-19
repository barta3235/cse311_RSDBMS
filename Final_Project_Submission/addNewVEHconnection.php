<?php
  include('./connection.php');

  $vid= $_POST['vi'];
  $did = $_POST['di'];
  $mn = $_POST['mn'];
  $my = $_POST['my'];
  $rnum = $_POST['rn'];
  $type = $_POST['t'];
  $sc = $_POST['sc'];
  $fare = $_POST['f'];

  if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into vehicle( VehicleID , DriverID, ModelName, ModelYear, RegistrationNumber, Type , ServiceClass, Fare) values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("iisssssi", $vid, $did, $mn, $my, $rnum, $type, $sc, $fare);
    $execval = $stmt->execute();
    /*echo $execval;*/
    
    $stmt->close();
    $conn->close();
    
    echo "<script>alert('New Vehicle Added To Database')</script>";
    echo "<script> window.location.href='./adminwork1.php' </script>";

}  


?>
