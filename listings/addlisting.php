<?php

include '../config.php';
include 'addhandler.php';


 if(!$_SESSION['email'] && !$_SESSION['password'])
{
      header("location:login.php");
}

 include '../menu.php';

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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-6 mt-5 pt-5">
    <h1> Add a listing</h1>

    <form action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"" method="post" enctype="multipart/form-data">

      <div class="form-group">
        <label for="address">Add property address</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-map-marker"></i>
          </div>
          <input id="pac-input" class="controls" type="text" placeholder="Search Box"  name="address" required="required" class="form-control here">
        </div>
        <span class="form-text text-muted">Type text to search for address</span>
      </div>
      <div id="map"></div>

      <div class="form-group">
        <label for="agent">Enter letting agent</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-address-card-o"></i>
          </div>
          <input name="agent" type="text" class="form-control here">
        </div>
      </div>

      <div class="form-group">
        <label for="type">User type</label>
        <div>
          <select name="usertype" class="custom-select">
            <option>Tenant</option>
            <option>landlord</option>
            <option>Letting agent</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="number">Total number of rooms</label>
        <div>
          <select class="custom-select" name="number">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
          <span class="form-text text-muted">The number of bedrooms the property has</span>
        </div>
      </div>

      <div class="form-group">
        <label>Room type</label>
        <div>
          <label class="custom-control custom-checkbox">
            <input name="roomtype[]" type="checkbox" class="custom-control-input" value="Single" >
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Single</span>
          </label>
          <label class="custom-control custom-checkbox">
            <input name="roomtype[]" type="checkbox" class="custom-control-input" value="Double" >
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Double</span>
          </label>
          <label class="custom-control custom-checkbox">
            <input name="roomtype[]" type="checkbox" class="custom-control-input" value="Downstairs">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Downstairs</span>
          </label>
          <label class="custom-control custom-checkbox">
            <input name="roomtype[]" type="checkbox"  class="custom-control-input" value="Upstairs">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Upstairs</span>
          </label>
          <label class="custom-control custom-checkbox">
            <input name="roomtype[]" type="checkbox" class="custom-control-input" value="Ensuite">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Ensuite</span>
          </label>
          <span class="form-text text-muted">Describe the room</span>
        </div>
      </div>

      <div class="form-group">
        <label>Property type</label>
        <div>
          <label class="custom-control custom-checkbox">
            <input name="proptype[]" type="checkbox" class="custom-control-input" value="Garden">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Garden</span>
          </label>
          <label class="custom-control custom-checkbox">
            <input name="proptype[]" type="checkbox" class="custom-control-input" value="Parking">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Parking</span>
          </label>
          <label class="custom-control custom-checkbox">
            <input name="proptype[]" type="checkbox" class="custom-control-input" value="Within Student Triangle">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Within Student Triangle</span>
          </label>
          <span class="form-text text-muted">Describe the property</span>
        </div>
      </div>

      <div class="form-group">
        <label for="description">Sell the property</label>
        <textarea  name="description" cols="40" rows="3" class="form-control"></textarea>
        <span  class="form-text text-muted">Other information/ who is living there now</span>
      </div>
      <div class="form-group">

        <label>Is the room available now?</label>
        <div class="form-group">
          <label for="available_now"></label>
          <div>
            <select class="custom-select" name="available_now">
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
            <span class="form-text text-muted">If not select available date</span>
          </div>
        </div>

      </div>
      <div class="form-group">
        <label for="Availability">Available from</label>
        <input name="availability" type="date" class="form-control here">
      </div>

      <div class="form-group">
        <label for="monthavailable">No of months available</label>
        <div>
          <select name="months" class="custom-select" required="required">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
          <span class="form-text text-muted">What is the number of months that the property must be leased for?</span>
        </div>

      </div>
      <div class="form-group">
        <label for="deposit">Deposit</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-money"></i>
          </div>
          <input name="deposit" type="text" class="form-control here" required="required">
        </div>
      </div>
      <div class="form-group">
        <label for="weekly cost">Weekly cost</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-money"></i>
          </div>
          <input  name="weekly" type="text" class="form-control here" required="required">
        </div>
      </div>
      <div class="form-group">
        <label for="bills">Weekly bills</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-money"></i>
          </div>
          <input name="bills" type="text" class="form-control here" required="required">
        </div>
      </div>
      <div class="form-group">
        <button name="add" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>



</div>
</div>
</div>

</body>
<script type='text/javascript' language='javascript' src="../searchmap.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDG5v14FmrdFDtzXVcWAfCJAFecaCJKwFE&libraries=places&callback=initAutocomplete"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/navbar-fixed.js"></script>
<html>
