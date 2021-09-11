<?php
  
  session_start();
  if(!isset($_SESSION['Name'])) {
      header("Location: ./admin.html");
  }
?>

<?php
  include('./connection.php');

  $id= $_GET['id'];

  $sql= "select * from customer where CustomerID='$id'";
  $getinfo= mysqli_query($conn,$sql);

  $row= mysqli_fetch_assoc($getinfo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Database Information (Customer)</title>

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
        <form class="form1" action="./updateCUSinfo.php?id=<?php echo $row['CustomerID'] ?>" method="POST">
            <h1>Update Informations</h1>
    
            <input class= "formreg" type="text" name="firstname" value=" <?php echo $row['Fname']; ?>" > 
            <input class="formreg" type="text" name="lastname" value=" <?php echo $row['Lname']; ?>" >
            <input class="formreg" type="date"  name="birthdate" value=" <?php echo $row['Birthdate']; ?>" >
            <input class="formreg" type="text" name="gender" value=" <?php echo $row['Gender'];?>" >
            <input class="formreg" type="tel" name="mobilenumber" value=" <?php echo $row['MobileNumber']; ?>" >
            <input class="formreg" type="text" name="cityaddress" value=" <?php  echo $row['CityAddress']; ?>" >
            <input class="formreg" type="text" name="streetaddress" value=" <?php echo $row['StreetAddress']; ?>" >
            <input class="formreg" type="email" name="email" value=" <?php echo $row['Email']; ?>" >
            <input class="registrationbutton" name="submit" type="submit" value="Update Information"><br>
        </form>
        </div>
    
</body>
</html>