<?php
  
  session_start();
  if(!isset($_SESSION['Name'])) {
      header("Location: ./admin.html");
  }
?>

<?php
  include('./connection.php');

  $id= $_GET['id'];

  $sql= "select * from driver where DriverID='$id'";
  $getdinfo= mysqli_query($conn,$sql);

  $rowd= mysqli_fetch_assoc($getdinfo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Database Information (Driver)</title>

    <!-- Form csss-->
    <style type="text/css">

.form1reg{
        display:flex;
        align-items: center;
        flex-direction: column;
        height: 100vh;
        font-family: sans-serif;
        top: -20px;
        left: 50%;
        position: absolute;
        transform: translate(-50%,0%);
    }
    .form1{
      margin-top: 50px;
      text-align: center;
      border: 1px solid;
      border-radius: 20px;
      box-shadow: 2px 4px #081436 ;
      background-color:whitesmoke;
    }
    
    .form1:hover{
        transform: scale(1.008);
    }
    .formreg{
        display: block;
        width: 430px;
        height: 40px;
        margin:20px;
        border: none;
        outline: none;
        font-size: 23px;
        border-bottom: 1px solid #081436;
    }
    .registrationbutton{
        width: 430px;
        height: 40px;
        font-size: 20px;
        color: cornsilk;
        border: none;
        background-color:#081436;
        margin-top: 10px;
        margin-bottom: 5px;
        border-radius: 50% 20% / 10% 40%;
    }
    .closereg{
        width: 430px;
        height: 40px;
        font-size: 20px;
        color: cornsilk;
        border: none;
        background-color:#9D2C2C;
        margin-bottom: 7px;
        border-radius: 50% 20% / 10% 40%;
    }
    .form1 h1{
        margin-bottom: 30px;
        color: #081436;
        font-size: 37px;
    }
    /* form css ends */
    
    
</style>

</head>
<body style="background-image:url(./neueimages/adminback.png); background-repeat: no-repeat;background-position: center;background-size: cover;background-attachment: fixed;">

<div class="form1reg" id="myform1">
        <form class="form1" action="./updateDRIVinfo.php?id=<?php echo $rowd['DriverID'] ?>" method="POST">
            <h1>Update Informations</h1>
    
            <input class= "formreg" type="text" name="firstnamed" value=" <?php echo $rowd['FirstName']; ?>" > 
            <input class="formreg" type="text" name="lastnamed" value=" <?php echo $rowd['LastName']; ?>" >
            <input class="formreg" type="date"  name="birthdated" value=" <?php echo $rowd['Age']; ?>" >
            <input class="formreg" type="text" name="genderd" value=" <?php echo $rowd['Gender'];?>" >
            <input class="formreg" type="tel" name="mobilenumberd" value=" <?php echo $rowd['NID']; ?>" >
            <input class="formreg" type="text" name="cityaddressd" value=" <?php  echo $rowd['LicenseNumber']; ?>" >
            <input class="formreg" type="text" name="streetaddressd" value=" <?php echo $rowd['DriverMobile']; ?>" >
            <input class="formreg" type="password" name="passwordd" value=" <?php echo $rowd['Password']; ?>" >
            <input class="registrationbutton" name="submitd" type="submit" value="Update Information"><br>
        </form>
        </div>
    
</body>
</html>