<?php
//starting session

 include '../config.php';

 session_start();

 if(!$_SESSION['email'] && !$_SESSION['password'])
 {
       header("location:login.php");
 }
 $id = intval($_GET['roomid']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LoughMate</title>
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>

  <?php

   include '../menu.php';

   $sqlq = $db->query("select * from listings where Listing_id='$id'");
   while($row = mysqli_fetch_assoc($sqlq))
{

  $listings = $row['Listing_id'];
  $address = $row['Address'];
  $agent= $row['Letting_Agent'];
  $noromms = $row['Number_of_rooms'];
  $deposit = $row['Deposit'];
  $weeklycost= $row['Weekly_cost'];
  $bills= $row['Bills'];
  $available_date= $row['Availability_date'];
  $description = $row['description'];
  $available_now= $row['available_now'];
  $months = $row['months'];
  $usertype= $row['usertype'];

  ?>
<div class="container"
  <div class="row mt-5 pt-5">
     <div class="card" style="width:20rem">
         <img class="card-img-top" src="../img/house.jpg" alt="Card image cap">
         <div class="card-body">
             <h4 class="card-title">Address: <?php echo $address; ?> </h4>
             <p class="card-text"> Weekly Price: <?php echo $weeklycost; ?></p>
             <p class="card-text"> Available now: <?php echo $available_now; ?></p>
             <p class="card-text"> No of rooms: <?php echo $available_now; ?></p>
             <p class="card-text"> Deposit: <?php echo $deposit; ?></p>
             <p class="card-text"> Bills: <?php echo $bills; ?></p>
             <p class="card-text"> Available date: <?php echo $available_date; ?></p>
             <p class="card-text"> Months available for: <?php echo $months; ?></p>

</div>
         </div>
     </div>
   </div>

   <?php
            }
              ?>




</body>
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/navbar-fixed.js"></script>
<html>
