<?php
   include('./connection.php');
    
   $firstname = $_POST['firstname'];
   $mobilenumber = $_POST['mobilenumber'];

       $check1 = "select CustomerID  from customer where MobileNumber='$mobilenumber'";
       $temp1 =  mysqli_query($conn,$check1);
       $result1 = mysqli_fetch_array($temp1);
       $pop1 = $result1['CustomerID'];   /*In pop1 goes the customer id  */

   $customerid= $pop1;    
   $vehicleclass = $_POST['vehicleclass'];
   $vehicle = $_POST['vehicletype'];

           $check = "select VehicleID from vehicle where ModelName='$vehicle'";
           $temp =  mysqli_query($conn,$check);
           $result = mysqli_fetch_array($temp);
           $pop = $result['VehicleID'];   /*In pop goes the vehicle id */

   $vehicleid= $pop;
            
                   $check5 = "select Fare from vehicle where ModelName='$vehicle'";
                   $temp5 =  mysqli_query($conn,$check5);
                   $result5 = mysqli_fetch_array($temp5);
                   $pop5 = $result5['Fare'];   /*In pop goes the vehicle id */
   $vehiclefare= $pop5;

       $checkxx = "select DriverMobile
                   from booking b join vehicle v
                   on b.VehicleID = v.VehicleID
                   join driver d
                   on v.DriverID = d.DriverID
                   where b.VehicleID= '$vehicleid'
                   order by BookID DESC LIMIT 1";                               
       
       $tempxx =  mysqli_query($conn,$checkxx);
       $resultxx = mysqli_fetch_array($tempxx);
       $popxx = $resultxx['DriverMobile'];  


  $drivermobile= $popxx;

   $date = $_POST['date'];
   $startlocation = $_POST['startlocation'];
   $starttime = $_POST['starttime'];
   $endlocation = $_POST['endlocation'];

   $check_mobilenumber = "select * from customer where MobileNumber='$mobilenumber'";
  $run_query =  mysqli_query($conn, $check_mobilenumber);
  if (mysqli_num_rows($run_query) > 0) {

    $insert_val = "insert into booking (CustomerID, FirstName, MobileNumber, VehicleClass, VehicleType, VehicleID, VehicleFare, Driverphone, Date, StartLocation, StartTime, EndLocation)
    values ('$customerid', '$firstname', ' $mobilenumber', '$vehicleclass', '$vehicle', '$vehicleid', '$vehiclefare', '$drivermobile', '$date', '$startlocation', '$starttime', '$endlocation')";
  
    if(mysqli_query($conn, $insert_val)){
      echo "<script>window.confirm('Thank you for riding with us!')</script>";
      echo "<script>window.open('./payment.php', '_self')</script>";
    }else {
      echo "<script>window.open('./Booking.html', '_self')</script>";
      
  }
  }else{
    echo "<script>alert('Mobile number $mobilenumber is not registered, Sign up')</script>";
    echo "<script>window.open('./Booking.html', '_self')</script>";
  }


   
  
   
?>