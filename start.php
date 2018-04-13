<?php
//starting session
 session_start();

 include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LoughMate</title>

</head>
<body>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
    Matchmaking
  </button>

<form action="#" method="post">
  <!-- Question 1-->
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
         <input type="radio" name="question1" value=-3 >Strongly Disagree</label>
       <label class="radio-inline">
         <input type="radio" name="question1" value=-2/> Disagree</label>
       <label class="radio-inline">
         <input type="radio" name="question1" value=-1 /> Slightly Disagree</label>
       <label class="radio-inline">
         <input type="radio" name="question1" value=1 />Slightly Agree</label>
       <label class="radio-inline">
        <input type="radio" name="question1" value=-2 />Agree</label>
       <label class="radio-inline">
        <input type="radio" name="question1" value=3 />Strongly Agree</label>
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


  <!-- Question 2-->
  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title text-muted">Socialability: 2/20</h6>
        </div>
        <div class="modal-body">
        <h4> I regularly host parties, pre-drinks and social gatherings</h4>
      </br>
      <div class="container">
      <label class="radio-inline">
         <input type="radio" name="question1" value=-3 >Strongly Disagree</label>
       <label class="radio-inline">
         <input type="radio" name="question1" value=-2/> Disagree</label>
       <label class="radio-inline">
         <input type="radio" name="question1" value=-1 /> Slightly Disagree</label>
       <label class="radio-inline">
         <input type="radio" name="question1" value=1 />Slightly Agree</label>
       <label class="radio-inline">
        <input type="radio" name="question1" value=-2 />Agree</label>
       <label class="radio-inline">
        <input type="radio" name="question1" value=3 />Strongly Agree</label>
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


  <!-- Question 3-->
  <div class="modal fade" id="question3" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title text-muted">Socialability: 3/20</h6>
        </div>
        <div class="modal-body">
        <h4> I often come home late or in the early hours of the morning</h4>
      </br>
      <div class="container">
  <form action="">
    <ul class='likert'>
      <li>
        <input type="radio" name="likert" > <label>Strongly </br>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Slightly </br>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Slightly </br>Agree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Agree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Strongly </br>Agree</label>
      </li>
    </ul>
      </form>
    </div>
        <div class="progress">
  <div class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated"
      aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">
        30%
  </div>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#question4">
            Next
          </button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Save</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Question 4-->
  <div class="modal fade" id="question4" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title text-muted">Socialability: 4/20</h6>
        </div>
        <div class="modal-body">
        <h4> I tend to go out party, socialize and meet friends most evenings </h4>
      </br>
      <div class="container">
  <form action="">
    <ul class='likert'>
      <li>
        <input type="radio"name="likert" > <label>Strongly </br>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Slightly </br>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Slightly </br>Agree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Agree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Strongly </br>Agree</label>
      </li>
    </ul>
      </form>
    </div>
        <div class="progress">
  <div class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated"
      aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
        40%
  </div>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#question5">
            Next
          </button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Save</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Question 5-->
  <div class="modal fade" id="question5" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title text-muted">Social Flexibility: 5/20</h6>
        </div>
        <div class="modal-body">
        <h4> I do not mind people borrowing things (Clothes, Money)</h4>
      </br>
      <div class="container">
  <form action="">
    <ul class='likert'>
      <li>
        <input type="radio" name="likert" > <label>Strongly </br>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Slightly </br>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Slightly </br>Agree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Agree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Strongly </br>Agree</label>
      </li>
    </ul>
      </form>
    </div>
        <div class="progress">
  <div class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated"
      aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
        50%
  </div>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#question6">
            Next
          </button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Save</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Question 6-->
  <div class="modal fade" id="question6" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title text-muted">Social Flexibility: 6/10</h6>
        </div>
        <div class="modal-body">
        <h4> I prefer to cook and eat dinner with my housemates</h4>
      </br>
      <div class="container">
  <form action="">
    <ul class='likert'>
      <li>
        <input type="radio" name="likert" > <label>Strongly </br>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Slightly </br>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Slightly </br>Agree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Agree</label>
      </li>
      <li>
        <input type="radio"> <label>Strongly </br>Agree</label>
      </li>
    </ul>
      </form>
    </div>
        <div class="progress">
  <div class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated"
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
        60%
  </div>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#question7">
            Next
          </button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Save</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Question 7-->
  <div class="modal fade" id="question7" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title text-muted">Lifestyle: 8/10</h6>
        </div>
        <div class="modal-body">
        <h4> Keeping fit and playing sports is a big part of my lifestlye </h4>
      </br>
      <div class="container">
  <form action="">
    <ul class='likert'>
      <li>
        <input type="radio" name="likert" > <label>Strongly </br>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Slightly </br>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Slightly </br>Agree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Agree</label>
      </li>
      <li>
        <input type="radio"> <label>Strongly </br>Agree</label>
      </li>
    </ul>
      </form>
    </div>
        <div class="progress">
  <div class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated"
      aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
        70%
  </div>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#question8">
            Next
          </button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Save</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Question 8-->
  <div class="modal fade" id="question8" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title text-muted">Lifestyle: 8/10</h6>
        </div>
        <div class="modal-body">
        <h4> I spend most of my weekdays at lectures, in the library or on campus</h4>
      </br>
      <div class="container">
  <form action="">
    <ul class='likert'>
      <li>
        <input type="radio" name="likert" > <label>Strongly </br>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Slightly </br>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Slightly </br>Agree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Agree</label>
      </li>
      <li>
        <input type="radio"> <label>Strongly </br>Agree</label>
      </li>
    </ul>
      </form>
    </div>
        <div class="progress">
  <div class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated"
      aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
        80%
  </div>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#question9">
            Next
          </button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Save</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Question 9-->
  <div class="modal fade" id="question9" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title text-muted">Cleanliness and Orderliness: 9/10</h6>
        </div>
        <div class="modal-body">
        <h4> I believe there should be a rota for household chores</h4>
      </br>
      <div class="container">
  <form action="">
    <ul class='likert'>
      <li>
        <input type="radio" name="likert" > <label>Strongly </br>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Slightly </br>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Slightly </br>Agree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Agree</label>
      </li>
      <li>
        <input type="radio"> <label>Strongly </br>Agree</label>
      </li>
    </ul>
      </form>
    </div>
        <div class="progress">
  <div class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated"
      aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
        90%
  </div>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#question10">
            Next
          </button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Save</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Question 10-->
  <div class="modal fade" id="question10" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title text-muted">Cleanliness and Orderliness: 10/10</h6>
        </div>
        <div class="modal-body">
        <h4> Everyone should wash their own dishes</h4>
      </br>
      <div class="container">
  <form action="">
    <ul class='likert'>
      <li>
        <input type="radio" name="likert" > <label>Strongly </br>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Slightly </br>Disagree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Slightly </br>Agree</label>
      </li>
      <li>
        <input type="radio" name="likert"> <label>Agree</label>
      </li>
      <li>
        <input type="radio"> <label>Strongly </br>Agree</label>
      </li>
    </ul>
      </form>
    </div>
        <div class="progress">
  <div class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated"
      aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
        100%
  </div>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Save</button>
        </div>
      </div>
    </div>
  </div>














</body>
<script  src="index.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<html>
