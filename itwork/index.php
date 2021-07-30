<?php
session_start();
 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre&display=swap" rel="stylesheet">


    <title>Hello, world!</title>
  </head>
  <body>
    <!-- navbar -->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="#">ITWORK!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
             <li class="nav-item">
              <?php
                  if(isset($_SESSION["login"])){
                    $logout = "<button type='button' class='btn btn-danger'><a href='logout.php' class='nav-link'>Logout</a></button>";
                    echo $logout;
                  } else{
                    $login = "<button type='button' class='btn btn-success'><a href='login.php' style='color:white;'>Login</a></button>";
                    echo $login;
                  }
               ?>
            </li>
          </ul>
        </div>
      </div>
      </nav>
    <!-- endnav -->

    <!-- jumbotron -->
      <div class="jumbotron jumbotron-fluid">
          <div class="container mt-5" align="center">
            <h1 class="display-4" align="center">Save Your Computer</h1>
            <p class="lead" align="center">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            <a href="list.php"><button type="button" class="btn btn-primary btn-lg">Get Started!</button></a>
            <button type="button" class="btn btn-secondary btn-lg">Later</button>
          </div>
      </div>
    <!-- endjumbotron -->

    <!-- container -->
  <div class="container1">
    <div class="row container mt-5">
      <div class="col">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
    <!-- end container  -->

    <!-- card -->
  <div class="container">
    <div class="row rowcard">
      <div class="col">
        <div class="card" style="">
          <img class="card-img-top" src="img/card1.png" alt="Card image cap" width="center">
          <div class="card-body bg-dark">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" style="">
          <img class="card-img-top" src="img/card2.jpg" alt="Card image cap" width="center">
          <div class="card-body bg-dark">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" style="">
          <img class="card-img-top" src="img/card3.webp" alt="Card image cap" width="center">
          <div class="card-body bg-dark">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>

  </div>
    <!-- end card -->

    <!-- biography -->
         <div class="jumbotron-fluid bg-dark">
          <div class="container mt-5" align="center">
            <h1 class="display-4" align="center">Save Your Computer</h1>
            <p class="lead" align="center">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            <a href="list.php"><button type="button" class="btn btn-primary btn-lg">Get Started!</button></a>
            <button type="button" class="btn btn-secondary btn-lg">Later</button>
          </div>
      </div>
    <!-- end biography -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
