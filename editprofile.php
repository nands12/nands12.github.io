<?php
//starting session

session_start();

 if (isset($_POST['submit']))
 {
 $t = time();

 $file_exts = array("jpg", "bmp", "jpeg", "gif", "png");
 $upload_exts = end(explode(".", $_FILES["image"]["name"]));
 //checking file format and size of file.

     if ((($_FILES["image"]["type"] == "image/gif") || ($_FILES["image"]["type"] == "image/jpeg") || ($_FILES["image"]["type"] == "image/png") || ($_FILES["image"]["type"] == "image/jpg"))
     && ($_FILES["image"]["size"] < 2000000) && in_array($upload_exts, $file_exts))
       {
         if ($_FILES["image"]["error"] > 0)
         {
           echo "Return Code: " . $_FILES["image"]["error"] . "<br>";
         }
         else
         {
             move_uploaded_file($_FILES["image"]["tmp_name"], "user/". $_FILES["image"]["name"]);

             $fullnameimg=$_FILES["image"]["name"];
             $targetimg="user/";
             $fulltargetimg=$targetimg.$fullnameimg;

 	$name=$_REQUEST["name"];
 	$password=$_REQUEST["password"];
 	$age=$_REQUEST["age"];
   $bio=$_REQUEST["bio"];
   $course=$_REQUEST["course"];
   $gender=$_REQUEST["gender"];
 	$year=$_REQUEST["year"];
 	$looking=$_REQUEST["looking"];
 	$netflix=$_REQUEST["netflix"];
 	$interests=$_REQUEST["interests"];


 	     $result=mysqli_query($db, "UPDATE user SET name='$name',password='$password',
          age='$age',bio='$bio', course='$course', image='$fulltargetimg',gender='$gender', year='$year',
           looking='$looking',netflix='$netflix',interests='$interests'
            WHERE email='$_SESSION[email]'");

 			if($result):

           echo '<div class="alert success"  id="alert">
         <span class="closebtn" onclick="this.parentElement.style.display='."'none';".'">&times;</span>
         <strong>  Successfully updated. </strong>
          </div>';
          header("location:myprofile.php");

        else :
          $error ='Data not inserting';
        endif;

 }

 }}


?>
