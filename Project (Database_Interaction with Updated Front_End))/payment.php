<?php
  
  
  include('./connection.php');



  $checkf = "select VehicleFare  from booking order by BookID DESC LIMIT 1";
  $tempf =  mysqli_query($conn,$checkf);
  $resultf = mysqli_fetch_array($tempf);
  $popf = $resultf['VehicleFare']; 
  
  $checkb = "select BookID from booking where VehicleFare='$popf' order by BookID DESC LIMIT 1";
  $tempb =  mysqli_query($conn,$checkb);
  $resultb = mysqli_fetch_array($tempb);
  $popb = $resultb['BookID'];

  $checkd = "select BookID from booking where VehicleFare='$popf' order by BookID DESC LIMIT 1";
  $tempd =  mysqli_query($conn,$checkd);
  $resultd = mysqli_fetch_array($tempd);
  $popd = $resultd['BookID'];
  
  $checkdm = "select Driverphone from booking where BookID='$popd' and VehicleFare='$popf' order by BookID DESC LIMIT 1";
  $tempdm =  mysqli_query($conn,$checkdm);
  $resultdm = mysqli_fetch_array($tempdm);
  $popdm = $resultdm['Driverphone'];

 
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>

<style type="text/css">
    
    .form3driverhire{
            display: flex;
            align-items: center;
            flex-direction: column;
            width: 550px;
            font-family: sans-serif;
            top:2%;
            left: 33%;
            transform: translate(-50%,0%);
            position:absolute;
            background-color: cornsilk;
            border-radius: 30px;
        }
        
        .form3{
          display: block;
          background-color: white;
          margin-top: 50px;
          text-align: center;
          border: 1px solid;
          border-radius: 18px;
          box-shadow: 1px 2px #081436 ;
          width: 500px;
        }
        
        .form3:hover{
            transform: scale(1.006);
        }
        
        .formdriverhire{
            display:block;
            width: 430px;
            height: 40px;
            margin:18px;
            border: none;
            outline: none;
            font-size: 20px;
            border-bottom: 1px solid #081436;
        }

        
        .drivehirebutton{
            width: 430px;
            height: 40px;
            font-size: 20px;
            color: cornsilk;
            border: none;
            background-color:rgb(102, 25, 25);
            margin-top: 3px;
            margin-bottom: 2px;
            border-radius: 50% 20% / 10% 40%;
        }
    
        .closedrivehire{
            width: 430px;
            height: 40px;
            font-size: 20px;
            color: cornsilk;
            border: none;
            background-color:#9D2C2C;
            margin-bottom: 3px;
            border-radius: 50% 20% / 10% 40%;
        }

        
        .driverhire{
            color: red;
        }
    
        
    
        .form3 h1{
            margin-bottom: 15px;
            color: #081436;
            font-size: 30px;
        }
        
        ::placeholder{
            color: black;
            display: block;
        }

        .moveme{
            margin-top: -40%;
            margin-left: 170%;
        }

</style>

<body style="background-image: url(./neueimages/payform.jpg);height: 700px;background-repeat: no-repeat;background-position: 95% 10%;background-color: rgb(236, 154, 122);">

<div class="form3driverhire">
    <form class="class="form3 action="paymentconnection.php" method="POST">
        <center>
        <h1>Confirm Your Payment</h1>
        <p style="color:red;padding-left: 2%;">Please kindly re-enter your mobile phone number</p>
    </center>  
                    <input class="formdriverhire" type="text" id="date-pii" name="date" placeholder="Date">
                    <input class="formdriverhire" type="text" id="dollar" value="<?php  echo $popf; echo " tk" ?>" name="amount" placeholder="Amount">
                    <input class="formdriverhire" type="text" name="mobilenumber" placeholder="Customer Mobile Number" required>
                    <input class="formdriverhire"  type="text" value="<?php echo "Booking ID: " ;echo $popb; ?>" name="bookingid" placeholder="Booking ID">
                   
                    <input class="formdriverhire" type="text" value="<?php  echo "Driver contact: ";echo $popdm;?>" placeholder="Driver contact Number">
                    <input class="formdriverhire" type="text" list="m" name="methodofpayment" placeholder="Method Of Payment" required>
                    <datalist id="m">
                        <option>Card</option>
                        <option>Cash</option>
                    </datalist>

                    <input class="formdriverhire" type="text" name="cardnumber" placeholder="Card Number">
                    <input class="formdriverhire" type="password" name="cvv" placeholder="cvv">
                    <input class="formdriverhire" type="text" name="expiredate" placeholder="Expire Date  MM:YYYY">
                
        <input  class="drivehirebutton" type="submit">
       <br>

    </form>
    <div class="moveme">
        <p style="font-size: 27px;" class="lastwords">Thank you for<br><br> travelling with <br><br><span style="background-color:#081436;font-size: 55px;padding: 7.4px;border-radius: 30px; color: whitesmoke;">neueTour</p><span></p>
      </div>  
</div>
</body>


</html>

<script>
    var date = new Date();
       document.getElementById("date-pii").value = date.getFullYear() + '-' 
       + (date.getMonth()+1) + '-' + String(date.getDate()).padStart(2,'0');
       
</script>
