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
<!DOCTYPE html>
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


  <section id="showcase" >
    <div class="primary-overlay text-white m-auto">
      <div class="container">
        <div class="row">
          <div class=" col-lg-12 text-center">
            <h1 class="display-2 mt-5 pt-5">
              I want to..
            </h1>
            <div class="btn-group btn-lg p-3">
            <form action="listings/browselisting.php" method="post"><input type="submit" value="Find a room" ></form>
            <form action="frame.php" method="post"><input type="submit" value="Find a housemate" ></form>
				    <form action="listings/addlisting.php" method="post"><input type="submit" value="Add a room" ></form>
            </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/navbar-fixed.js"></script>

</body>
<html>
