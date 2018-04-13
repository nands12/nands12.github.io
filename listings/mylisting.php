<?php
 include '../config.php';
//starting session
 session_start();

if (!SESSION['email'] && !_SESSION['password']) {
header("location:login.php");
}

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

   <h1> My listings </h1>

   <?php
//pagination

//select listings for each user
$total = $db->query("SELECT * FROM listings where user='$_SESSION[email]'");
//get the number of rows of listings made by each user
$nr=mysqli_num_rows($total);
$items_per_page=6; //only show 6 listings on a page
$total_pages = ceil($nr/$items_per_page); //divide the number of listings by 6 to get the number of pages
if(isset($_GET['page']) &&!empty($_GET['page'])) {

  $page=$_GET['page'];
}
else {

    $page=1;
}
$offset=($page-1)*$items_per_page;
//call results
$sql = $db->query("SELECT * FROM listings where user='$_SESSION[email]' LIMIT $items_per_page OFFSET $offset");

while ($ro = mysqli_fetch_assoc($sql)) {

  $room=$ro['Room_Type'];
  $roomno=$ro['Listing_id'];

   ?>


<div class="row">
   <div class="card" style="width:20rem"><?php echo '<a href="editlisting.php?roomid='.$roomno.'" style="text-decoration:none;">' ; ?>
       <img class="card-img-top" src="../img/house.jpg" alt="Card image cap">
       <div class="card-body">
           <h4 class="card-title">Room Type: <?php echo rtrim($room,","); ?> </h4>
           <p class="card-text"> Weekly Price: <?php echo "£". $ro['Weekly_cost']; ?></p>
           <p class="card-text"> Available now: <?php echo $ro['months']; ?></p>
           <p class="card-text"> Adress: <?php echo $ro['Address']; ?></p>
            <a href="editlisting.php?roomid='.$roomno.'" name="edit" class="btn btn-success btn-block">Edit listing</a>
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
     echo '<li><a href="mylisting.php?page=' . $i . '">'. $i .'</a></li>';
 }




   ?>


</body>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/navbar-fixed.js"></script>
</html>
