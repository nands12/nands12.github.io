<?php

//calling connection
include 'config.php';
include 'register.php';

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body id="home">
  <nav class="navbar navbar-expand-md navbar-light fixed-top py-4">
    <div class="container">
      <a href="index.html" class="navbar-brand">
        <img src="img/logo.png" width="50" height="50" alt=""><h4 class="d-inline align-middle">LoughMate</h4>
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <button class="btn btn-info" data-toggle="modal" data-target="#loginModal">Login</button>
          </li>
          <li class="nav-item">
            <button class="btn btn-info" data-toggle="modal" data-target="#RegisterModal">Register</button>
          </li>
          <li class="nav-item">
            <a href="#accordion" class="nav-link">How it works</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- SHOWCASE -->
  <section id="showcase" class="py-5">
    <div class="primary-overlay  text-center text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1 class="display-2 mt-5 pt-5">
              LoughMate
            </h1>
            <p class="lead">The house share social network </p>
          </div>
          <div class="col-lg-6">
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ABOUT / WHY SECTION -->
  <section id="about" class="py-5 text-center bg-light">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
            <h1 class="text-primary pb-3">
              How does it work?
            </h1>
            <p class="lead pb-3">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet omnis fuga maiores excepturi dolores explicabo.
            </p>
          </div>

          <!-- ACCORDION -->
          <div id="accordion" role="tablist">
            <div class="card">
              <div class="card-header" id="heading1">
                <h5 class="mb-0">
                  <div href="#collapse1" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-arrow-circle-down"></i> Get Inspired
                  </div>
                </h5>
              </div>

              <div id="collapse1" class="collapse show">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi pariatur optio totam obcaecati facere nam nihil inventore dolorum consequuntur quis unde voluptatibus numquam velit veniam explicabo eveniet fugit hic, tenetur. Iusto, consequatur, obcaecati. Ab earum alias, placeat exercitationem possimus quidem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem officia officiis aliquam fugiat, omnis, corrupti dolorum ipsa laudantium sequi dolores!
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="heading2">
                <h5 class="mb-0">
                  <div href="#collapse2" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-arrow-circle-down"></i> Gain The Knowledge
                  </div>
                </h5>
              </div>

              <div id="collapse2" class="collapse">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi pariatur optio totam obcaecati facere nam nihil inventore dolorum consequuntur quis unde voluptatibus numquam velit veniam explicabo eveniet fugit hic, tenetur. Iusto, consequatur, obcaecati. Ab earum alias, placeat exercitationem possimus quidem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem officia officiis aliquam fugiat, omnis, corrupti dolorum ipsa laudantium sequi dolores!
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="heading3">
                <h5 class="mb-0">
                  <div href="#collapse3" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-arrow-circle-down"></i> Open Your Mind
                  </div>
                </h5>
              </div>

              <div id="collapse3" class="collapse">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi pariatur optio totam obcaecati facere nam nihil inventore dolorum consequuntur quis unde voluptatibus numquam velit veniam explicabo eveniet fugit hic, tenetur. Iusto, consequatur, obcaecati. Ab earum alias, placeat exercitationem possimus quidem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem officia officiis aliquam fugiat, omnis, corrupti dolorum ipsa laudantium sequi dolores!
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="modal" id="loginModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Login</h5>
          <button class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="#" method="post">
            <div class="form-group">
              <label for="Email">Username</label>
              <input type="text" name="email" placeholder="Email" class="form-control" required="">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" placeholder="Password" class="form-control" required="">
            </div>
            <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with"
              data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" name= "login" value= "Login"</button>

        </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="RegisterModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Register</h5>
          <button class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="#" method="post">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" placeholder="Username" name="username" class="form-control" required="">
            </div>
              <div class="form-group">
                <label for="Email">Username</label>
                <input type="text" placeholder="Email" name="email" class="form-control" required="">
              </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" placeholder="Password" name="password" class="form-control" required="">
            </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" name= "register" value= "Register"</button>
        </form>
        </div>
      </div>
    </div>
  </div>

  <footer id="main-footer" class="py-5 bg-primary text-white">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-6 ml-auto">
        </div>
      </div>
    </div>
  </footer>


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/navbar-fixed.js"></script>
</body>
</html>
