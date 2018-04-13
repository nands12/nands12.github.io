<?php
//starting session
 session_start();
 include 'menu.php';

 include 'config.php';

 if(!$_SESSION['email'] && !$_SESSION['password'])
{
    header("location:login.php");
}

?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LoughMate</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  
    <h1> Your inbox </h1>


<?php

$sql = mysqli_query($db, "SELECT * FROM message WHERE to_msg='$_SESSION[email]'");
				while($row = mysqli_fetch_assoc($sql))
				{
					$frommsg=$row['from_msg'];
					$msg=$row['message'];

			?>
        <div class="container mt-5 pt-5">
    <div class="card">
  <div class="card-header">
    <strog> Date </strong>
  </div>
  <div class="card-body">
    <h5 class="card-title">From: <?php echo $frommsg; ?></h5>
    <p class="card-text">Message: <?php echo $msg; ?></p>

  </div>
</div>
</div>
<?php
				}
		?>







</body>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/navbar-fixed.js"></script>
<html>
