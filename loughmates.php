<?php
//starting session
 session_start();
 include 'menu.php';

 include 'config.php';

 if(!$_SESSION['email'] && !$_SESSION['password'])
{
    header("location:login.php");
}

//function for squaring the data

function square($exp) {
  return $exp*$exp;
}

$main = mysqli_query($db, "SELECT * FROM questionnaire Where User = '$_SESSION[email]'");

  while ($rowresult12 = mysqli_fetch_assoc($main)) {
    $resultmain = $rowresult12;

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

  <?php

//fetching loughmates who have registered
$result=mysqli_query($db,"SELECT * FROM user where email!='$_SESSION[email]'");

while($ro = mysqli_fetch_assoc($result))

{
$sno=$ro['sno'];
$name=$ro['name'];
$age=$ro['age'];
$des=$ro['designation'];
$img=$ro['image'];
$gen=$ro['gender'];
$email=$ro['email'];
$match=mysqli_query($db,"SELECT * FROM questionnaire where User='$email'");


while($rowresult = mysqli_fetch_assoc($match))

{
$resultqwe=$rowresult;
?>



<div class="container">
  <div class="row">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/person.png">
  <div class="card-body">
    <h5 class="card-title"><?php echo $name.",".$age ?></h5>
    <p class="card-text">
      Course: <br>
      Year <br>
      Looking for: <br>

    </p>

    <?php
// compatiblity calulation Algorithm
  $intitial_calc=
  square($resultmain["Answer1"]-$resultqwe["Answer1"])+
  square($resultmain["Answer2"]-$resultqwe["Answer2"])+
  square($resultmain["Answer3"]-$resultqwe["Answer3"])+
  square($resultmain["Answer4"]-$resultqwe["Answer4"])+
  square($resultmain["Answer5"]-$resultqwe["Answer5"])+
  square($resultmain["Answer6"]-$resultqwe["Answer6"])+
  square($resultmain["Answer7"]-$resultqwe["Answer7"])+
  square($resultmain["Answer8"]-$resultqwe["Answer8"])+
  square($resultmain["Answer9"]-$resultqwe["Answer9"])+
  square($resultmain["Answer10"]-$resultqwe["Answer10"]);  // putting in formula

  $intitial_calc = $intitial_calc / 10; // dividing the value by number of questions

  $intitial_calc=sqrt($intitial_calc);  // taking squareroot

//calculating the percentage
  $intitial_calc = ($intitial_calc/6)*100;
  $final = 100- $intitial_calc;
  echo number_format((float)$final, 2, '.', '')."% match";
?>

    <a href="#" class="btn btn-primary">View profile</a>
  </div>
</div>

  </div>
</div>
<?php
}
}
 }

?>


</body>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/navbar-fixed.js"></script>
<html>
