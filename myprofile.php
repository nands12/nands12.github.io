<?php
//starting session

error_reporting(0);

 include 'menu.php';
 include 'config.php';
 include 'editprofile.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.css" />
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>


<!--
fetching user details where user is logged in user using session
-->

  <?php
      $resultsql=mysqli_query($db,"SELECT * FROM user where email='$_SESSION[email]'");

  	   while($roww = mysqli_fetch_assoc($resultsql))

      {
      	$name=$roww['name'];
        $email=$roww['email'];
        $password=$roww['password'];
        $age=$roww['age'];
        $bio=$roww['bio'];
        $img=$roww['image'];
        $course=$roww['course'];
        $gender=$roww['gender'];
        $year=$roww['year'];
        $looking=$roww['looking'];
        $netflix =$roww['netflix'];
        $interests=$roww['interests'];

  ?>

  <div class="container">
    <header id="main-header">
      <div class="row no-gutters">
        <div class="col-lg-4 col-md-5">
        </div>
        <div class="col-lg-8 col-md-7">
          <div class="d-flex flex-column">
            <div class="p-3 bg-dark text-white">
              <div class="name d-flex flex-row justify-content-between align-items-center">
                <h3 class="display-4 text-center"> <?php echo "Hey, I'm"." ". ucfirst($name) ?></h3>
              </div>
            </div>

            <div class="p-3 bg-black">
              I am looking for: <?php echo $looking; ?>
            </div>

            <div>
              <div class="d-flex flex-row text-white align-items-stretch text-center">
                <div href="test.php" class="port-item p-4 bg-primary" data-toggle="collapse" data-target="#home">
                  <i class="fa fa-home d-block"></i>  My Profile
                </div>
                <div class="port-item p-4 bg-success" data-toggle="collapse" data-target="#resume">
                  <i class="fa fa-graduation-cap d-block"></i> My Listings
                </div>
                <div class="port-item p-4 bg-warning" data-toggle="collapse" data-target="#work">
                  <i class="fa fa-folder-open d-block"></i> My messages
                </div>
                <div class="port-item p-4 bg-danger" data-toggle="collapse" data-target="#Edit">
                  <i class="fa fa-envelope d-block"></i> Edit Profile
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- HOME -->
    <div id="home" class="collapse show">
      <div class="card card-body bg-primary text-white py-5">
        <h2>Profile </h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, quia.</p>
      </div>

      <div id="home"class="card card-body py-5">
        <h3>My Skills</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum nulla et, modi harum hic deserunt.</p>
        <hr>
        <h4>HTML</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width:100%"></div>
        </div>
        <h4>CSS</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width:100%"></div>
        </div>
        <h4>JavaScript</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width:90%"></div>
        </div>
        <h4>PHP</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width:80%"></div>
        </div>
        <h4>Python</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width:70%"></div>
        </div>
      </div>
    </div>

    <!-- RESUME -->
    <div id="resume" class="collapse">
      <div class="card card-body bg-success text-white py-5">
        <h2>My Resume</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo nobis ut labore iure tempore qui!</p>
      </div>

      <div class="card card-body py-5">
        <h3>Where have I worked?</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis eligendi, ex officia itaque tempora natus.</p>
        <div class="card-deck">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Devmasters</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nostrum.</p>
              <p class="p-2 mb-3 bg-dark text-white">
                Position: Full Stack Developer
              </p>
              <p class="p-2 mb-3 bg-dark text-white">
                Phone: (444) 444-4444
              </p>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">Dates: 2015 - 2017</h6>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Websites Pro</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nostrum.</p>
              <p class="p-2 mb-3 bg-dark text-white">
                Position: Front End Developer
              </p>
              <p class="p-2 mb-3 bg-dark text-white">
                Phone: (333) 333-3333
              </p>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">Dates: 2013 - 2015</h6>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h4 class="card-title">123 Designs</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nostrum.</p>
              <p class="p-2 mb-3 bg-dark text-white">
                Position: Designer
              </p>
              <p class="p-2 mb-3 bg-dark text-white">
                Phone: (222) 222-2222
              </p>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">Dates: 2010 - 2013</h6>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- WORK -->
    <div class="collapse">
      <div class="card card-body bg-warning py-5">
        <h3>My Portfolio</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, adipisci?</p>
      </div>

      <div class="card card-body py-5">
        <h3>What have I built?</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, eum.</p>
        <div class="row no-gutters">
          <div class="col-md-3">
            <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox">
              <img src="https://unsplash.it/600.jpg?image=251" alt="" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3">
            <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox">
              <img src="https://unsplash.it/600.jpg?image=252" alt="" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3">
            <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox">
              <img src="https://unsplash.it/600.jpg?image=253" alt="" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3">
            <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox">
              <img src="https://unsplash.it/600.jpg?image=254" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="row no-gutters">
          <div class="col-md-3">
            <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox">
              <img src="https://unsplash.it/600.jpg?image=255" alt="" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3">
            <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox">
              <img src="https://unsplash.it/600.jpg?image=256" alt="" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3">
            <a href="https://unsplash.it/1200/768.jpg?image=257" data-toggle="lightbox">
              <img src="https://unsplash.it/600.jpg?image=257" alt="" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3">
            <a href="https://unsplash.it/1200/768.jpg?image=258" data-toggle="lightbox">
              <img src="https://unsplash.it/600.jpg?image=258" alt="" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- CONTACT -->

    <div id="Edit" class="collapse">
      <div class="card card-body bg-danger text-white py-3">
        <h2>Edit Profile Information</h2>
      </div>

      <div class="form-group files">
                <label>Upload Your File </label>
                <input type="file" name="image" class="form-control" multiple="">
              </div>

      <div class="card card-body py-5">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" disabled>
                <small class="form-text text-muted">Your email will not be shared with anyone</small>
            </div>

            <div class="form-group">
                <label for="password">password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
            </div>

            <div class="form-group">
                <label for="age">age</label>
                <input type="text" name="age" class="form-control" value="<?php echo $age; ?>">
            </div>

            <div class="form-group">
                <label for="Course">Course</label>
                <input type="text" name="course" class="form-control" value="<?php echo $course; ?>">
            </div>

              <div class="form-group">
                <label for="Gender" >gender</label>
                  <select name="gender" required="required">
                    <option value="male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="looking for" >Looking forr</label>
                    <select name="looking" required="required">
                      <option value="House">House</option>
                      <option value="Housemate">Housemate</option>
                    </select>
                  </div>


  <div class="form-group">
    <label for="year">Year</label>
    <div class="col-8">
      <select name="year" required="required">
        <option value="First Year">First Year</option>
        <option value="Second Year ">Second Year</option>
        <option value="Placement Year">Placement Year</option>
        <option value="Third Year ">Third Year</option>
        <option value="Postgraduate">Postgraduate</option>
      </select>
    </div>
  </div>

            <div class="form-group">
                <label for="bio">Bio</label>
                <input type="text" name="bio" class="form-control" value="<?php echo $bio; ?>">
            </div>

              <div class="form-group">
                <label for="textarea" class="control-label">Top 3 Netflix Shows</label>
                <div class="col-xs-8">
                  <textarea  name="netflix" cols="40" value="<?php echo $netflix; ?>" rows="3" class="form-control"></textarea>
                  <span class="help-block">Optional</span>
                </div>
              </div>
              <div class="form-group">
                <label for="textarea1" class="control-label col-xs-4">Interests, Societies, Clubs</label>
                <div class="col-xs-8">
                  <textarea name="interests"  value="<?php echo $interests; ?>"cols="40" rows="5" class="form-control"></textarea>
                  <span class="help-block">Optional</span>
                </div>
              </div>

            <input type="submit" value="submit" name="submit">

          </form>

          <?php
        }
        ?>



  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.js"></script>
  <script>
    $('.port-item').click(function(){
      $('.collapse').collapse('hide');
    });

    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
  </script>
</body>
</html>
