<?php
  
  session_start();
  if(!isset($_SESSION['Name'])) {
      header("Location: ./admin.html");
  }
?>

<?php
  include('./connection.php');

  $idd= $_GET['id'];
  $fnd= $_POST['firstnamed'];
  $lnd= $_POST['lastnamed'];
  $bdd= $_POST['birthdated'];
  $gd= $_POST['genderd'];
  $mnd= $_POST['mobilenumberd'];
  $cad= $_POST['cityaddressd'];
  $sad= $_POST['streetaddressd'];
  $ed= $_POST['passwordd'];



  $tem= "update driver set FirstName='$fnd',  LastName='$lnd', Age='$bdd',Gender='$gd',	NID='$mnd', LicenseNumber='$cad', DriverMobile='$sad' ,Password='$ed'  where DriverID = $idd";
  $update= mysqli_query($conn,$tem);

  if($update){
      header("Location: ./adminwork1.php");
  }else{
      echo "There has been an error";
  }  

?>