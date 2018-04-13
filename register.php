<?php

//calling connection
include 'config.php';

session_start();
//Clicking on submit button

if(isset($_POST['login']))
{

$login = mysqli_query($db,"SELECT * FROM user WHERE email='$_POST[email]' AND password='$_POST[password]'");

	$retrive = mysqli_num_rows($login);
	if($retrive == true)
	{
    $_SESSION['email']=$_POST['email'];
    $_SESSION['password']=$_POST['password'];
		header("location:option.php");
	}
	else
	{
		echo "<script>alert('Wrong Login Details, Try Again!')</script>";
	}
    }

     if(isset($_POST['register']))
    {

         $result=mysqli_query($db,"insert into user( name, email, password,) values( '$_POST[username]','$_POST[email]','$_POST[password]')");

        if($result==true)
         {
          header("location:homepage.php");
         }
         else{
              echo '<div class="alert warning"  id="alert">
             <span class="closebtn" onclick="this.parentElement.style.display='."'none';".'">&times;</span>
             <strong> Error Logging in!. </strong>
              </div>';
         }

    }

?>
