<?php
//starting session
session_start();
 include 'menu.php';

 include 'config.php';

 if(!$_SESSION['email'] && !$_SESSION['password']) {

   header("location:login.php");
 }

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
//fetching user details where user is logged in user using session

$result = mysqli_query($db, "SELECT* FROM user where email='$_SESSION[email]'");

  while($ro = mysqli_fetch_assoc($result)) {

    $name=$ro['name'];
    $age=$ro['age'];
    $des=$ro['designation'];
	   $bio=$ro['bio'];
	    $img=$ro['image'];
	     $gen=$ro['gender'];

  ?>
  <div class="total-content">
		<div class="top-grids"></div>
			<div class="top-grids-2">
				<div class="profile-agile">
					<h2>Profile</h2>
					<div class="w3layouts">
					<?php
					if ($img==null)
					{
						if($gen=='female'){
						echo "<img src='img/user1.png' style='width:130px; height:130px'/>";
						}
						else if($gen=='male'){
						echo "<img src='img/user.png' style='width:130px; height:130px'/>";
						}
					}
					else
					{
						echo "<img src='".$img."' style='width:130px; height:130px' />";
					}
					?>

						<h3><?php echo $name.", ".$age; ?></h3>
						<label class="line"></label>
						<h3><?php echo $des; ?></h3>
						<label class="line"></label>
						<p> <?php echo $bio; ?></p>
						<label class="line"></label>
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
