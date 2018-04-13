<?php
 if(isset($_POST['logout'])) {

   session_destroy();

   header("location: index.php");
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


<body id="menu">
  <nav class="navbar navbar-expand-md navbar-light fixed-top py-4">
    <div class="container">
      <a href="index.php" class="navbar-brand">
        <img src="img/logo.png" width="50" height="50" alt=""><h4 class="d-inline align-middle">Loughmate</h4>
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Browse</a>
            <div class="dropdown-menu">
              <a href="" class="dropdown-item">Loughmates</a>
              <a href="" class="dropdown-item">Properties</a>
          </li>
          <li class="nav-item">
            <a href="p.php" class="nav-link">My Profile</a>
          </li>
          <li class="nav-item">
            <a href="loughmates.php" class="nav-link">Messages</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Welcome<?php echo $_SESSION['email'];?></a>
          </li>
          <li>
            <form action="#" method="POST">
            <button name="logout" type="submit"class="nav-link">Log out</a>
            </form>
        </ul>
      </div>
    </div>
  </nav>


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/navbar-fixed.js"></script>
</body>
</html>
