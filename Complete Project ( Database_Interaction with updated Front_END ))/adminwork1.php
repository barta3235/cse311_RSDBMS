<?php
  
  session_start();
  if(!isset($_SESSION['Name'])) {
      header("Location: ./admin.html");
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  
<head>
    <meta charset="utf-8">
    <title>admin pannel-one</title> 

    <style>
    table {
     font-family: arial, sans-serif;
     border-collapse: collapse;
     width: 100%;
  }

   td, th {
     border: 1px solid #c2c2c2;
    text-align: left;
    padding: 8px;
   }

   tr:nth-child(even) {
      background-color: #dddddd;
   }
   tr:nth-child(odd) {
      background-color: #dddddd;
   }

   .hone{
     font-size:55px;
     padding : 20px;
     color:cornsilk;
     background-color: #1E3268;
     border-radius:30px;
     background:transparent;
     text-align:right;
   }
   
   .hmid{
    color:cornsilk;
    font-size:35px;
     background-color: #1E3268;
     border-radius:30px;
     padding:15px;
     opacity: 0.8;
   }

   .ein{
     float:right;
     background-color:#900A0A;
     color:cornsilk;
     font-size:20px;
     width:174px;
     text-decoration: none;
     
   }

   .hlast{
     float:center;
     background-color:#900A0A;
     color:cornsilk;
     font-size:30px;
     color:cornsilk;
     width:189px;
     text-decoration: none;
     margin-bottom:15px;
     border-radius:30px;
     background-color: #03031a;

   }
  

</style> 


  </head>
  
  <body style="background-image:url(./neueimages/map.jpg); background-repeat: no-repeat;background-position: center;background-size: cover;background-attachment: fixed;">
      <center>
    <h1 class="hone">Welcome Admin  <?php echo $_SESSION['Name']; ?></h1><br><br><br>
    
      <h2 class= "hmid">User pannel</h2>
      
      <table>
          <thead>
          <th>Customer ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Birth Date</th>
          <th>Gender</th>
          <th>Mobile Number</th>
          <th>City Address</th>
          <th>Street Address</th>
          <th>Email</th>
          <th>Edit<br>Information</th>
          </thead>

          <tbody>
            <?php
                 include('./connection.php');     
                 $viewusers="select * from customer";
                 $query= mysqli_query($conn ,$viewusers);
                 while($row= mysqli_fetch_array($query)){
                     $id= $row[0];
                     $fname= $row[1];
                     $lname= $row[2];
                     $bd= $row[3];
                     $gender= $row[4];
                     $mobile= $row[5];
                     $cad= $row[6];
                     $sad= $row[7];
                     $email= $row[8];
                
                ?>

                <tr>
                    <td> <?php echo $id ?>  </td>
                    <td> <?php echo $fname ?>  </td>
                    <td> <?php echo $lname ?>  </td>
                    <td> <?php echo $bd ?>  </td>
                    <td> <?php echo $gender ?>  </td>
                    <td> <?php echo $mobile ?>  </td>
                    <td> <?php echo $cad ?>  </td>
                    <td> <?php echo $sad ?>  </td>
                    <td> <?php echo $email ?>  </td>
                    <td> <a href="./editCUSinfo.php?id= <?php echo $id ?>">Edit</a>
                </tr>
                 
                <?php
                                                      }         
                ?>

          </tbody>


      </table><br><br><br><br><br> 
      <!-- Sign up pannel ends-->
      <h2 class= "hmid">Driver pannel</h2>

       <!-- Driveer pannel starts -->
      <table>
          <thead>
          <th>Driver ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Age</th>
          <th>Gender</th>
          <th>NID</th>
          <th>License NO.</th>
          <th>Contact</th>
          <th>Password</th>
          <th>Edit<br>Information</th>
          </thead>

          <tbody>
            <?php
                 include('./connection.php');     
                 $viewdrivers="select * from driver";
                 $query2= mysqli_query($conn ,$viewdrivers);
                 while($row1= mysqli_fetch_array($query2)){
                     $did= $row1[0];
                     $fname1= $row1[1];
                     $lname1= $row1[2];
                     $age= $row1[3];
                     $gender= $row1[4];
                     $nid= $row1[5];
                     $lnum= $row1[6];
                     $contact= $row1[7];
                     $password= $row1[8];
                
                ?>

                <tr>
                    <td> <?php echo $did ?>  </td>
                    <td> <?php echo $fname1 ?>  </td>
                    <td> <?php echo $lname1 ?>  </td>
                    <td> <?php echo $age ?>  </td>
                    <td> <?php echo $gender ?>  </td>
                    <td> <?php echo $nid ?>  </td>
                    <td> <?php echo $lnum ?>  </td>
                    <td> <?php echo $contact ?>  </td>
                    <td> <?php echo $password ?>  </td>
                    <td> <a href="./editDinfo.php?id= <?php echo $did ?>">Edit</a>
                </tr>

                <?php
                                                      }         
                ?>
                   
          </tbody>
      </table>
      <a class="ein" href="./addNewDriv.php">Add New Driver</a> <br><br><br><br><br>
      <!-- Driver pannel ends-->

      <!-- Vehicle starts -->
      <h2 class= "hmid">Vehicle pannel</h2>

      <table>
          <thead>
          <th>Vehicle ID</th>
          <th>Driver ID</th>
          <th>Model Name</th>
          <th>Model Year</th>
          <th>Registration Number</th>
          <th>Type</th>
          <th>Service Class</th>
          <th>Fare</th>
          <th>Edit<br>Information</th>
          </thead>

          <tbody>
            <?php
                 include('./connection.php');     
                 $viewvehicles="select * from vehicle";
                 $queryv= mysqli_query($conn ,$viewvehicles);
                 while($row1v= mysqli_fetch_array($queryv)){
                     $idv= $row1v[0];
                     $fnamev= $row1v[1];
                     $lnamev= $row1v[2];
                     $agv= $row1v[3];
                     $genderv= $row1v[4];
                     $nidv= $row1v[5];
                     $lnumv= $row1v[6];
                     $contactv= $row1v[7];
                     
                
                ?>

                <tr>
                    <td> <?php echo $idv ?>  </td>
                    <td> <?php echo $fnamev ?>  </td>
                    <td> <?php echo $lnamev ?>  </td>
                    <td> <?php echo $agv ?>  </td>
                    <td> <?php echo $genderv ?>  </td>
                    <td> <?php echo $nidv ?>  </td>
                    <td> <?php echo $lnumv ?>  </td>
                    <td> <?php echo $contactv ?>  </td>
                    <td> <a href="./editVinfo.php?id= <?php echo $idv ?>">Edit</a>
                </tr>
                 
                <?php
                                                      }         
                ?>

          </tbody>
      </table>
      <a class="ein" href="./addNewVEH.php">Add New Vehicle</a> <br><br><br><br><br>


      <!--vehicle ends -->

      <h2 class= "hmid">Trip Details</h2><br>


      <table>
          <thead>
          <th>Book ID</th>
          <th>Customer ID</th>
          <th>Customer Name</th>
          <th>Customer Number</th>
          <th>Vehicle ID</th>
          <th>Vehicle Name</th>
          <th>Driver Phone</th>
          <th>Date</th>
          <th>Start Location</th>
          <th>Start Time</th>
          <th>End Location</th>
          </thead>

          <tbody>
            <?php
                 include('./connection.php');     
                 $trip="select BookID, CustomerID, FirstName, MobileNumber, VehicleID, VehicleType, Driverphone, Date, StartLocation, StartTime, EndLocation
                         from booking  ";
                 $queryt= mysqli_query($conn ,$trip);
                 while($rowt= mysqli_fetch_array($queryt)){
                     $t1= $rowt[0];
                     $t2= $rowt[1];
                     $t3= $rowt[2];
                     $t4= $rowt[3];
                     $t5= $rowt[4];
                     $t6= $rowt[5];
                     $t7= $rowt[6];
                     $t8= $rowt[7];
                     $t9= $rowt[8];
                     $t10= $rowt[9];
                     $t11= $rowt[10];
                     
                     
                
                ?>

                <tr>
                    <td> <?php echo $t1 ?>  </td>
                    <td> <?php echo $t2 ?>  </td>
                    <td> <?php echo $t3 ?>  </td>
                    <td> <?php echo $t4 ?>  </td>
                    <td> <?php echo $t5 ?>  </td>
                    <td> <?php echo $t6 ?>  </td>
                    <td> <?php echo $t7 ?>  </td>
                    <td> <?php echo $t8 ?>  </td>
                    <td> <?php echo $t9 ?>  </td>
                    <td> <?php echo $t10 ?>  </td>
                    <td> <?php echo $t11 ?>  </td>
                
                    
                </tr>
                 
                <?php
                                                      }         
                ?>

          </tbody>
                                                    </table><br>





    <br><br> <div class="adminlogout">
      <a class="hlast" href="logout.php">Logout</a> </div>
</center>
  </body>

</html>