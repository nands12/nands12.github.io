<?php
//starting session
 session_start();

 include '../config.php';

 if(!$_SESSION['email'] && !$_SESSION['password'])
{
      header("location:../login.php");
}

//get interger value of room ID

$id = intval($_GET['roomid']);


//change arrays into variables

if(isset($_POST['update'])) {

  $checkbox1=$_POST['roomtype'];
  $chk="";
  foreach($checkbox1 as $chk1)
     {
        $chk .= $chk1.",";
     }

     $checkbox2=$_POST['proptype'];
   $check="";
   foreach($checkbox2 as $chk2)
      {
         $check .= $chk2.",";
      }

      //update query to new input into listings table

      $result=mysqli_query($db,"Update listings set Number_of_rooms= '$_POST[number]',
      proptype= '$check',Address= '$_POST[address]',Availability_date= '$_POST[availability]',
      Deposit= '$_POST[deposit]',Weekly_cost= '$_POST[weekly]',Bills= '$_POST[bills]' where Listing_id= '$id'");

      //$result = mysqli_query($db, "UPDATE listings SET Address='$_POST[address]', Letting_Agent='$_POST[agent]',
      //Room_Type= '$chk', Number_of_rooms= '$_POST[number]', Deposit= '$_POST[deposit]', Weekly_cost='$_POST[weekly]',
      //Bills= '$_POST[bills]',proptype='$check',Availability_date= '$_POST[availability]',usertype= '$_POST[usertype]',
      //description='$_POST[description], available_now= '$_POST[available_now]', months= '$_POST[months]' WHERE Listing_id='$id'");

      if ($result == true) {

        header("location:mylisting.php");
      }
      else {

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
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

  <?php
 include '../menu.php';

   ?>

<div class="container">
  <div class="row">
    <div class="col-md-6 mt-5 pt-5">
    <h1> Edit Listing</h1>


  <?php

  $sql = $db->query("SELECT * FROM listings Where Listing_id='$id'");
  while ($row = mysqli_fetch_assoc($sql)) {


    $listings = $row['Listing_id'];
    $address = $row['Address'];
    $agent= $row['Letting_Agent'];
    $noromms = $row['Number_of_rooms'];
    $deposit = $row['Deposit'];
    $weeklycost= $row['Weekly_cost'];
		$bills= $row['Bills'];
		$available_date= $row['Availability_date'];
    $description = $row['description'];
    $available_now= $row['available_now'];
    $months = $row['months'];
    $usertype= $row['usertype'];

    ?>


    <form action="" method="post">

      <div class="form-group">
        <label for="address">Add property address</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-map-marker"></i>
          </div>
          <input id="pac-input" class="controls" type="text" value= "<?php echo "$address"; ?>"  name="address" class="form-control here">
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
          <input name="agent" type="text" value= "<?php echo "$agent"; ?>" class="form-control here">
        </div>
      </div>

      <div class="form-group">
        <label for="type">User type</label>
        <div>
          <select name="usertype" class="custom-select">
            <option <?php if($usertype== "Tenant"){ echo "selected";}?>>1</option>
            <option <?php if($usertype== "Letting agent"){ echo "selected";}?>>1</option>
            <option <?php if($usertype== "Landlord"){ echo "selected";}?>>1</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="number">Total number of rooms</label>
        <div>
          <select class="custom-select" name="number">
            <option <?php if($noromms== 1){ echo "selected";}?>>1</option>
            <option <?php if($noromms== 2){ echo "selected";}?>>2</option>
            <option <?php if($noromms== 3){ echo "selected";}?>>3</option>
            <option <?php if($noromms== 4){ echo "selected";}?>>4</option>
            <option <?php if($noromms== 5){ echo "selected";}?>>5</option>
            <option <?php if($noromms== 6){ echo "selected";}?>>6</option>
            <option <?php if($noromms== 7){ echo "selected";}?>>7</option>
            <option <?php if($noromms== 8){ echo "selected";}?>>8</option>
            <option <?php if($noromms== 9){ echo "selected";}?>>9</option>
            <option <?php if($noromms== 10){ echo "selected";}?>>10</option>
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
        <textarea  value= "<?php echo "$description"; ?>" name="description" cols="40" rows="3" class="form-control"></textarea>
        <span  class="form-text text-muted">Other information/ who is living there now</span>
      </div>
      <div class="form-group">

        <label>Is the room available now?</label>
        <div class="form-group">
          <label for="available_now"></label>
          <div>
            <select class="custom-select" name="available_now">
              <option <?php if($available_now== "Yes"){ echo "selected";}?>>Yes</option>
              <option <?php if($available_now== "No"){ echo "selected";}?>>No</option>
            </select>
            <span class="form-text text-muted">If not select available date</span>
          </div>
        </div>

      </div>
      <div class="form-group">
        <label for="Availability">Available from</label>
        <input value= "<?php echo "$available_date"; ?>" name="availability" type="date" class="form-control here">
      </div>

      <div class="form-group">
        <label for="monthavailable">No of months available</label>
        <div>
          <select name="months" class="custom-select">
            <option <?php if($months== 1){ echo "selected";}?>>1</option>
            <option <?php if($months== 2){ echo "selected";}?>>2</option>
            <option <?php if($months== 3){ echo "selected";}?>>3</option>
            <option <?php if($months== 4){ echo "selected";}?>>4</option>
            <option <?php if($months== 5){ echo "selected";}?>>5</option>
            <option <?php if($months== 6){ echo "selected";}?>>6</option>
            <option <?php if($months== 7){ echo "selected";}?>>7</option>
            <option <?php if($months== 8){ echo "selected";}?>>8</option>
            <option <?php if($months== 9){ echo "selected";}?>>9</option>
            <option <?php if($months== 10){ echo "selected";}?>>10</option>
            <option <?php if($months== 11){ echo "selected";}?>>11</option>
            <option <?php if($months== 12){ echo "selected";}?>>12</option>
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
          <input value= "<?php echo "$deposit"; ?>" name="deposit" type="text" class="form-control here">
        </div>
      </div>
      <div class="form-group">
        <label for="weekly cost">Weekly cost</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-money"></i>
          </div>
          <input value= "<?php echo "$weeklycost"; ?>" name="weekly" type="text" class="form-control here">
        </div>
      </div>
      <div class="form-group">
        <label for="bills">Weekly bills</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-money"></i>
          </div>
          <input "<?php echo "$bills"; ?>" name="bills" type="text" class="form-control here">
        </div>
      </div>
      <div class="form-group">
        <button name="update" type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>

<?php
}

?>

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
