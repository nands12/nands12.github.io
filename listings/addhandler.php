<?php

//clicking on submit button in add.php page

session_start();

if(isset($_POST['add']))

{

//inserting results of roomtype checkbox into variable to be inserted into database query
$checkbox1=$_POST['roomtype'];
$chk="";
foreach($checkbox1 as $chk1)
   {
      $chk .= $chk1.",";
   }

//inserting results from proprty type into variable to be inserted into database query
     $checkbox2=$_POST['proptype'];
   $check="";
   foreach($checkbox2 as $chk2)
      {
         $check .= $chk2.",";
      }

//insert form input values into listings table

$result = $db->query("INSERT INTO listings(Address, Letting_Agent, Room_Type,
  Number_of_rooms, Deposit, Weekly_cost, Bills, proptype, Availability_date,
   usertype, description, available_now, months, user) values('$_POST[address]','$_POST[agent]', '$chk',
   '$_POST[number]','$_POST[deposit]', '$_POST[weekly]', '$_POST[bills]', '$check',
    '$_POST[availability]','$_POST[usertype]', '$_POST[description]','$_POST[available_now]','$_POST[months]',
    '$_SESSION[email]')");

//if query is executed Successfully
    if($result) :

        echo '<div class="alert success"  id="alert">
              <span class="closebtn" onclick="this.parentElement.style.display='."'none';".'">&times;</span>
              <strong>  Successfully Added. </strong>
               </div>';

                    header("location:mylisting.php");

      // if query fails
             else :
              $error ='Data not inserting';
             endif;
      		}




      ?>
