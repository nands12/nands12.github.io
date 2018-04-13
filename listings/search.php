<?php
 include '../config.php';
//starting session
 session_start();

if (!$_SESSION['email'] && !$__SESSION['password']) {
header("location:login.php");
}

$searchvalue = $_GET['searchval'];

?>

<html lang="en">
<head>
  <title> Browse listings </title>
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
   ?>

   <h1> Results </h1>

   <?php

$total = mysqli_query($db, "SELECT * FROM listings WHERE Address LIKE '%$searchvalue%'");
$nr=mysqli_num_rows($total);
$items_per_page=4;
$total_pages=ceil($nr/$items_per_page);
if(isset($_GET['page']) && !empty($_GET['page']))
{
	$page=$_GET['page'];

}
else{

	$page=1;
}
$offset=($page-1)*$items_per_page;

		 $resultent = mysqli_query($db, "SELECT * FROM listings WHERE Address LIKE '%$searchvalue%'");
     while($ro=mysqli_fetch_array($resultent))



      {
      $room=$ro['Room_Type'];
  	 $roomno=$ro['Listing_id'];

?>
<div class="row">
   <div class="card" style="width:20rem"><?php echo '<a href="viewlisting.php?roomid='.$roomno.'" style="text-decoration:none;">' ; ?>
       <img class="card-img-top" src="../img/house.jpg" alt="Card image cap">
       <div class="card-body">
           <h4 class="card-title">Room Type: <?php echo rtrim($room,","); ?> </h4>
           <p class="card-text"> Weekly Price: <?php echo "£". $ro['Weekly_cost']; ?></p>
           <p class="card-text"> Available now: <?php echo $ro['months']; ?></p>
           <p class="card-text"> Adress: <?php echo $ro['Address']; ?></p>
       </div>
   </div>


<?php
 }

								  ?>
</div>


 <ul class="pagination">
 <?php
 //pagination
 for($i=1;$i<=$total_pages;$i++){

   if($i==$page)
     echo '<li><a>'. $i . '</a></li>';
   else
     echo '<li><a href="search.php?page=' . $i . '">'. $i .'</a></li>';
 }




   ?>


</body>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/navbar-fixed.js"></script>
</html>
