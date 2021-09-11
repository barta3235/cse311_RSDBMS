<?php
  
  include('./connection.php');
   
  if (isset($_POST['dphone'])) {

    $name= $_POST['dname'];
    $num= $_POST['dphone'];
    $password = $_POST['dpass'];

    if ($name == '') {
      echo "<script>alert('Please enter the name')</script>";
      echo "<script>window.open('./loginfordriver.html','_self')</script>";
      exit();
    }
    if ($num == '') {
      echo "<script>alert('Please enter the Phone Number')</script>";
      echo "<script>window.open('./loginfordriver.html','_self')</script>";
      exit();
    }
    if ($password == '') {
      echo "<script>alert('Please enter the password')</script>";
      echo "<script>window.open('./loginfordriver.html','_self')</script>";
      exit();
    }
    

    $check_driver = "select * from driver where FirstName ='$name' AND  DriverMobile='$num' AND	Password='$password'";
    $queryd = mysqli_query($conn,$check_driver );
    if(mysqli_num_rows($queryd)){
      session_start();
      $_SESSION['FirstName'] = $name;
                
  ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Driver user view</title>

      <style>
          
          table {
     font-family: arial, sans-serif;
     border-collapse: collapse;
     width: 100%;
     opacity:0.7;
  }

   td {
     border: 2.5px solid #c2c2c2;
    text-align: left;
    padding: 8px;
    font-size:25px;
   }

   th{
    border: 3px solid #525252 ;
    text-align: left;
    padding: 8px;
     background-color:#969696;
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
     opacity: 0.7;
     border-width:55px;
     float:right;
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
     float:right;
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


     }

      </style>
    </head>
    <body style="background-image:url(./neueimages/map.jpg); background-repeat: no-repeat;background-position: center;background-size: cover;background-attachment: fixed;">
         <h1 class= "hmid">Welcome NeutourDriver <?php echo  $_SESSION['FirstName'] ?><h1>
    <table><br><br><br><br><br><br><br>
          <thead>
          <th>Customer Name</th>
          <th>Customer Mobile Number</th>
          <th>Date</th>
          <th>Vehicle</th>
          <th>Fare</th>
          <th>Start Location</th>
          <th>Start Time</th>
          <th>End Location</th>
          </thead>

          <tbody>
            <?php
                
                $viewi="select FirstName, MobileNumber, Date, VehicleType, VehicleFare, StartLocation, StartTime, EndLocation from booking 
                where  Driverphone= '$num' order by BookID DESC LIMIT 1";
                $queryc= mysqli_query($conn ,$viewi);
                while($row1c= mysqli_fetch_array($queryc)){
                    $idv= $row1c[0];
                    $fnamev= $row1c[1];
                    $lnamev= $row1c[2];
                    $agv= $row1c[3];
                    $genderv= $row1c[4];
                    $nidv= $row1c[5];
                    $lnumv= $row1c[6];
                    $contactv= $row1c[7];
                
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
                </tr>
                 
                <?php
                                                      }         
                ?>

          </tbody>


      </table>

    <br> <div class="adminlogout">
      <a class="hlast" href="log2out.php">Logout</a> </div>
    </body>
    </html>
  
<?php
    }else{
      echo "<script>alert('Email or password is incorrect, Enter correct name and password')</script>";
      echo "<script>window.open('./loginfordriver.html','_self')</script>";
    }


    







   }else{
    echo "<script>window.open('./loginfordriver.html','_self')</script>";
   }

?>