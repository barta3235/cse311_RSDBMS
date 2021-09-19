<?php
  
  session_start();
  if(!isset($_SESSION['Name'])) {
      header("Location: ./admin.html");
  }
?>


<?php
  include('./connection.php');

  $ide= $_GET['id'];
  $fne= $_POST['firstname'];
  $lne= $_POST['lastname'];
  $bde= $_POST['birthdate'];
  $ge= $_POST['gender'];
  $mne= $_POST['mobilenumber'];
  $cae= $_POST['cityaddress'];
  $sae= $_POST['streetaddress'];
  $ee= $_POST['email'];



  $tem= "update customer set Fname='$fne',  Lname='$lne', Birthdate='$bde', Gender='$ge', MobileNumber='$mne', CityAddress='$cae', StreetAddress=' $sae', Email='$ee' where CustomerID = $ide";
  $update= mysqli_query($conn,$tem);

  if($update){
      header("Location: ./adminwork1.php");
  }else{
      echo "There has been an error";
  }  

?>