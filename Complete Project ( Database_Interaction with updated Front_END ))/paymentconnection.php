<?php
    include('./connection.php');

    $mobilenumber =$_POST['mobilenumber'];
         
      $check = "select BookID from booking where MobileNumber='$mobilenumber' order by BookID DESC LIMIT 1";
      $temp =  mysqli_query($conn,$check);
      $result = mysqli_fetch_array($temp);
      $pop = $result['BookID'];   
    $bookingid = $pop;
      
    $date =$_POST['date'];

      
      $check2 = 
       "select Fare 
       from booking b join vehicle v
       on b.VehicleID = v.VehicleID
       where MobileNumber='$mobilenumber' order by BookID DESC LIMIT 1";
      $temp2 =  mysqli_query($conn,$check2);
      $result2 = mysqli_fetch_array($temp2);
      $pop2 = $result2['Fare']; 

    $amount = $pop2;
   
    $method = $_POST['methodofpayment'];
    $cardnumber = $_POST['cardnumber'];
    $cvv = $_POST['cvv'];
    $expiredate = $_POST['expiredate'];

    $check_mobilenumber = "select * from booking where MobileNumber='$mobilenumber'";
    $run_query =  mysqli_query($conn, $check_mobilenumber);
    if (mysqli_num_rows($run_query) > 0) {
  
      $insert_val = "insert into payment (BookingID, CustomerContact, Amount, PaymentMethod, CardNumber, CVV,ExpireDate)
      values ('$bookingid', '$mobilenumber', '$amount', ' $method', '$cardnumber', ' $cvv', '$expiredate')";
    
      if(mysqli_query($conn, $insert_val)){
        echo "<script>window.confirm('Thank you dear customer.Please share your experience in the FeedBack box. Tschüss!')</script>";
        echo "<script>window.open('./Home.html', '_self')</script>";
      }else {
        echo "<script>window.open('./payment.html', '_self')</script>";
        
    }
    }else{
      echo "<script>alert('Mobile number $mobilenumber is not registered, Sign up')</script>";
      echo "<script>window.open('./Booking.html', '_self')</script>";
    }
  

?>