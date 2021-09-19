<?php
  
  session_start();
  if(!isset($_SESSION['Name'])) {
      header("Location: ./admin.html");
  }
?>

<?php
  include('./connection.php');

  $idv= $_GET['id'];
  $fnv= $_POST['v1'];
  $lnv= $_POST['v2'];
  $bdv= $_POST['v3'];
  $gv= $_POST['v4'];
  $mnv= $_POST['v5'];
  $cav= $_POST['v6'];
  $sav= $_POST['v7'];



  $temv= "update vehicle set DriverID='$fnv',  ModelName='$lnv', ModelYear='$bdv', RegistrationNumber='$gv', Type='$mnv', 	ServiceClass='$cav', Fare=' $sav' where VehicleID = $idv";
  $updatev= mysqli_query($conn,$temv);

  if($updatev){
      header("Location: ./adminwork1.php");
  }else{
      echo "There has been an error";
  }  

?>