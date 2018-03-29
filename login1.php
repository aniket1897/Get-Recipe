<?php include('server.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="styles.css">
   <!-- <link rel="icon" href="../../../../favicon.ico">-->

    <title>Signin to Get Recipe</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery Scripts -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    </script>

    <script src="bootstrap/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">

      <header>
          <!-- Fixed navbar -->
          <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-danger">
            <a class="navbar-brand" href="#">
              <img src="images/logo.jpeg" alt="LOGO" width="50" height="50" >&ThickSpace; Get Recipe
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
            </button>

           <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Login<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="register.html">Register<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Blogs<span class="sr-only">(current)</span></a>
                </li>
              </ul>     
            </div> 
          </nav>
        </header>

    <form class="form-signin" method="post" action=""login1.php"">
       <img class="mb-4" src="images/logo.jpeg" alt="" width="152" height="152"> 
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
       <button class="btn btn-lg btn-danger btn-block" type="submit" name="login_user">Sign in</button> 
     <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>-->
    </form>

    <footer class="footer bg-footer-color">
        <div class="container">
          <span class="text-muted">&copy; Copyright 2018-2019</span>
        </div>
      </footer>




  </body>
</html>
