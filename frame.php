<?php
//starting session
session_start();
include 'config.php';

if(!$_SESSION['email'] && !$_SESSION['password'])
{
      header("location:profile.php");
}

if (isset($_POST['question'])) {



  $result = mysqli_query($db, "UPDATE questionnaire SET Answer1= '$_POST[question1]',
  Answer2= '$_POST[question2]', Answer3= '$_POST[question3]', Answer4= '$_POST[question4]',
  Answer5='$_POST[question5]',Answer6= '$_POST[question6]', Answer7= '$_POST[question7]',
  Answer8= '$_POST[question8]', Answer9= '$_POST[question9]', Answer10='$_POST[question10]'
  WHERE User= '$_SESSION[email]'");

  if($result==true)
  {
   header("location:profile.php");
  }
  else{
       echo '<div class="alert warning"  id="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='."'none';".'">&times;</span>
      <strong> Something Went Wrong!!!. </strong>
       </div>';
  }
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

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1">
  Matchmaking
</button>

<?php

$result123=mysqli_query($db,"SELECT * FROM questionnaire where user='$_SESSION[email]'");

while($ro = mysqli_fetch_assoc($result123))

{

	$ans1=$ro['Answer1'];
	$ans2=$ro['Answer2'];
	$ans3=$ro['Answer3'];
	$ans4=$ro['Answer4'];
	$ans5=$ro['Answer5'];
  $ans6=$ro['Answer6'];
  $ans7=$ro['Answer7'];
  $ans8=$ro['Answer8'];
  $ans9=$ro['Answer9'];
  $ans10=$ro['Answer10'];

?>

<form action="" method="post">

<!-- Question 1 -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title text-muted">Socialability: 1/20</h6>
      </div>
      <div class="modal-body">
      <h4> I regularly host parties, pre-drinks and social gatherings</h4>
    </br>
    <div class="container">
    <label class="radio-inline">
       <input type="radio" name="question1" value=-3 <?php if($ans1 == -3) { echo ' checked="checked"';}?>>Strongly Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question1" value=-2 <?php if($ans1 == -2) { echo ' checked="checked"';}?>/> Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question1" value=-1 <?php if($ans1 == -1) { echo ' checked="checked"';}?>/> Slightly Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question1" value=1 <?php if($ans1 == 1) { echo ' checked="checked"';}?>/>Slightly Agree</label>
     <label class="radio-inline">
      <input type="radio" name="question1" value=-2 <?php if($ans1 == 2) { echo ' checked="checked"';}?>/>Agree</label>
     <label class="radio-inline">
      <input type="radio" name="question1" value=3 <?php if($ans1 == 3) { echo ' checked="checked"';}?>/>Strongly Agree</label>
   </div>
      <div class="progress">
<div class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated"
    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%">
      10%
</div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-prev">Prev</button>
        <button type="button" class="btn btn-default btn-next">Next</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>



<!-- Question 2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title text-muted">Socialability: 2/20</h6>
      </div>
      <div class="modal-body">
      <h4> I tend to go out party, socialize, and meet friends most evenings</h4>
    </br>
    <div class="container">
    <label class="radio-inline">
       <input type="radio" name="question2" value=-3 <?php if($ans2 == -3) { echo ' checked="checked"';}?> />Strongly Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question2" value=-2 <?php if($ans2 == -2) { echo ' checked="checked"';}?>/> Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question2" value=-1 <?php if($ans2 == -1) { echo ' checked="checked"';}?>/> Slightly Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question2" value=1 <?php if($ans2 == 1) { echo ' checked="checked"';}?>/>Slightly Agree</label>
     <label class="radio-inline">
      <input type="radio" name="question2" value=-2 <?php if($ans2 == 2) { echo ' checked="checked"';}?>/>Agree</label>
     <label class="radio-inline">
      <input type="radio" name="question2" value=3 <?php if($ans2 == 3) { echo ' checked="checked"';}?>/>Strongly Agree</label>
   </div>
      <div class="progress">
<div class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated"
    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
      20%
</div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-prev">Prev</button>
        <button type="button" class="btn btn-default btn-next">Next</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>


<!-- Question 3 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title text-muted">Socialability: 3/20</h6>
      </div>
      <div class="modal-body">
      <h4> I often come home very late or early hours of the morning</h4>
    </br>
    <div class="container">
    <label class="radio-inline">
       <input type="radio" name="question3" value=-3 <?php if($ans3 == -3) { echo ' checked="checked"';}?> />Strongly Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question3" value=-2 <?php if($ans3 == -2) { echo ' checked="checked"';}?>/> Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question3" value=-1 <?php if($ans3 == -1) { echo ' checked="checked"';}?>/> Slightly Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question3" value=1 <?php if($ans3 == 1) { echo ' checked="checked"';}?>/>Slightly Agree</label>
     <label class="radio-inline">
      <input type="radio" name="question3" value=-2 <?php if($ans3 == 2) { echo ' checked="checked"';}?> />Agree</label>
     <label class="radio-inline">
      <input type="radio" name="question3" value=3 <?php if($ans3 == 3) { echo ' checked="checked"';}?>/>Strongly Agree</label>
   </div>
      <div class="progress">
<div class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated"
    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">
      30%
</div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-prev">Prev</button>
        <button type="button" class="btn btn-default btn-next">Next</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Question 4 -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title text-muted">Socialability: 4/20</h6>
      </div>
      <div class="modal-body">
      <h4> Netflix and take-away is my idea of a perfect Friday night</h4>
    </br>
    <div class="container">
    <label class="radio-inline">
       <input type="radio" name="question4" value=-3 <?php if($ans4 == -3) { echo ' checked="checked"';}?> />Strongly Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question4" value=-2 <?php if($ans4 == -2) { echo ' checked="checked"';}?>/> Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question4" value=-1 <?php if($ans4 == -1) { echo ' checked="checked"';}?> /> Slightly Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question4" value=1 <?php if($ans4 == 1) { echo ' checked="checked"';}?>/>Slightly Agree</label>
     <label class="radio-inline">
      <input type="radio" name="question4" value=-2 <?php if($ans4 == 2) { echo ' checked="checked"';}?>/>Agree</label>
     <label class="radio-inline">
      <input type="radio" name="question4" value=3 <?php if($ans4 == 3) { echo ' checked="checked"';}?>/>Strongly Agree</label>
   </div>
      <div class="progress">
<div class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated"
    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
      40%
</div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-prev">Prev</button>
        <button type="button" class="btn btn-default btn-next">Next</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Question 4 -->

<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title text-muted">Social Flexibility: 5/20</h6>
      </div>
      <div class="modal-body">
      <h4> I do not mind people borrowing things (dishes, clothes)</h4>
    </br>
    <div class="container">
    <label class="radio-inline">
       <input type="radio" name="question5" value=-3  <?php if($ans5 == -3) { echo ' checked="checked"';}?>/>Strongly Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question5" value=-2 <?php if($ans5 == -2) { echo ' checked="checked"';}?>/> Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question5" value=-1 <?php if($ans5 == -1) { echo ' checked="checked"';}?>/> Slightly Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question5" value=1 <?php if($ans5 == 1) { echo ' checked="checked"';}?>/>Slightly Agree</label>
     <label class="radio-inline">
      <input type="radio" name="question5" value=-2 <?php if($ans5 == 2) { echo ' checked="checked"';}?>/>Agree</label>
     <label class="radio-inline">
      <input type="radio" name="question5" value=3 <?php if($ans5 == 3) { echo ' checked="checked"';}?>/>Strongly Agree</label>
   </div>
      <div class="progress">
<div class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated"
    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
      50%
</div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-prev">Prev</button>
        <button type="button" class="btn btn-default btn-next">Next</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Question 6 -->

<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title text-muted">Social Flexibility: 6/20</h6>
      </div>
      <div class="modal-body">
      <h4> I am happy to help with personal favours (E.g. Giving lifts)</h4>
    </br>
    <div class="container">
    <label class="radio-inline">
       <input type="radio" name="question6" value=-3 <?php if($ans6 == -3) { echo ' checked="checked"';}?>/ >Strongly Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question6" value=-2 <?php if($ans6 == -2) { echo ' checked="checked"';}?>/> Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question6" value=-1 <?php if($ans6 == -1) { echo ' checked="checked"';}?>/> Slightly Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question6" value=1 <?php if($ans6 == 1) { echo ' checked="checked"';}?>/>Slightly Agree</label>
     <label class="radio-inline">
      <input type="radio" name="question6" value=-2 <?php if($ans6 == 2) { echo ' checked="checked"';}?>/>Agree</label>
     <label class="radio-inline">
      <input type="radio" name="question6" value=3 <?php if($ans6 == 3) { echo ' checked="checked"';}?>/>Strongly Agree</label>
   </div>
      <div class="progress">
<div class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated"
    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
      60%
</div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-prev">Prev</button>
        <button type="button" class="btn btn-default btn-next">Next</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Question 7 -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title text-muted">Social Flexibility: 7/20</h6>
      </div>
      <div class="modal-body">
      <h4> I spend most of the time in communal areas such as the kitchen and the living room</h4>
    </br>
    <div class="container">
    <label class="radio-inline">
       <input type="radio" name="question7" value=-3 <?php if($ans7 == -3) { echo ' checked="checked"';}?>/>Strongly Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question7" value=-2 <?php if($ans7 == -2) { echo ' checked="checked"';}?>/> Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question7" value=-1 <?php if($ans7 == -1) { echo ' checked="checked"';}?>/> Slightly Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question7" value=1 <?php if($ans7 == 1) { echo ' checked="checked"';}?>/>Slightly Agree</label>
     <label class="radio-inline">
      <input type="radio" name="question7" value=-2 <?php if($ans7 == 2) { echo ' checked="checked"';}?>/>Agree</label>
     <label class="radio-inline">
      <input type="radio" name="question7" value=3 <?php if($ans7 == 3) { echo ' checked="checked"';}?>/>Strongly Agree</label>
   </div>
      <div class="progress">
<div class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated"
    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
      70%
</div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-prev">Prev</button>
        <button type="button" class="btn btn-default btn-next">Next</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Question 8 -->
<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title text-muted">Lifestyle: 8/20</h6>
      </div>
      <div class="modal-body">
      <h4> Keeping fit and playing sports is a big part of my lifestyle</h4>
    </br>
    <div class="container">
    <label class="radio-inline">
       <input type="radio" name="question8" value=-3 <?php if($ans8 == -3) { echo ' checked="checked"';}?> />Strongly Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question8" value=-2 <?php if($ans8 == -2) { echo ' checked="checked"';}?>/> Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question8" value=-1 <?php if($ans8 == -1) { echo ' checked="checked"';}?>/> Slightly Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question8" value=1 <?php if($ans8 == 1) { echo ' checked="checked"';}?>/>Slightly Agree</label>
     <label class="radio-inline">
      <input type="radio" name="question8" value=-2 <?php if($ans8 == 2) { echo ' checked="checked"';}?>/>Agree</label>
     <label class="radio-inline">
      <input type="radio" name="question8" value=3 <?php if($ans8 == 3) { echo ' checked="checked"';}?>/>Strongly Agree</label>
   </div>
      <div class="progress">
<div class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated"
    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
      80%
</div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-prev">Prev</button>
        <button type="button" class="btn btn-default btn-next">Next</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>


<!-- Question 9 -->
<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title text-muted">Lifestyle: 9/10</h6>
      </div>
      <div class="modal-body">
      <h4> I believe obtaining a degree is the most imortant part of University</h4>
    </br>
    <div class="container">
    <label class="radio-inline">
       <input type="radio" name="question9" value=-3 <?php if($ans9 == -3) { echo ' checked="checked"';}?>/>Strongly Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question9" value=-2 <?php if($ans9 == -2) { echo ' checked="checked"';}?>/> Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question9" value=-1 <?php if($ans9 == -1) { echo ' checked="checked"';}?>/> Slightly Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question9" value=1 <?php if($ans9 == 1) { echo ' checked="checked"';}?>/>Slightly Agree</label>
     <label class="radio-inline">
      <input type="radio" name="question9" value=-2 <?php if($ans9 == 2) { echo ' checked="checked"';}?>/>Agree</label>
     <label class="radio-inline">
      <input type="radio" name="question9" value=3 <?php if($ans9 == 3) { echo ' checked="checked"';}?>/>Strongly Agree</label>
   </div>
      <div class="progress">
<div class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated"
    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%">
      10%
</div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-prev">Prev</button>
        <button type="button" class="btn btn-default btn-next">Next</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Question 10 -->

<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title text-muted">Cleanliness and Orderliness: 10/10</h6>
      </div>
      <div class="modal-body">
      <h4> I believe there should be a rota for household chores</h4>
    </br>
    <div class="container">
    <label class="radio-inline">
       <input type="radio" name="question10" value=-3<?php if($ans10 == -3) { echo ' checked="checked"';}?> >Strongly Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question10" value=-2 <?php if($ans10 == -2) { echo ' checked="checked"';}?>/> Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question10" value=-1<?php if($ans10 == -1) { echo ' checked="checked"';}?> /> Slightly Disagree</label>
     <label class="radio-inline">
       <input type="radio" name="question10" value=1 <?php if($ans10 == 1) { echo ' checked="checked"';}?>/>Slightly Agree</label>
     <label class="radio-inline">
      <input type="radio" name="question10" value=-2 <?php if($ans10 == 2) { echo ' checked="checked"';}?>/>Agree</label>
     <label class="radio-inline">
      <input type="radio" name="question10" value=3 <?php if($ans10 == 3) { echo ' checked="checked"';}?>/>Strongly Agree</label>
   </div>
      <div class="progress">
<div class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated"
    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
      100%
</div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-prev">Prev</button>
        <input type="submit" value="Submit" name="question">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</form>
<?php
}
		?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script  src="index.js"></script>


</body>

</html>
