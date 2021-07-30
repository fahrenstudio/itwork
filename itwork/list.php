<?php 

session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}

 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre&display=swap" rel="stylesheet">

    <title>Hello, world!</title>
    <style type="text/css">
      body{
          background-image:url(img/background.jpg);
          background-size:cover;
          background-repeat:no-repeat;
        }
    </style>
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
                    $login = "<button type='button' class='btn btn-success'>Success</button>";
                    echo $login;
                  }
               ?>
            </li>
          </ul>
        </div>
      </div>
      </nav>
    <!-- endnav -->

    <!-- card -->
    <div class="container mt-5" align="center">
    	<div class="row mt-5">
    		<div class="col">
    			<div class="card" style="width: 18rem;">
				  <img src="img/cpu.jpg" class="card-img-top" alt="..." height="250rem">
				  <div class="card-body bg-dark">
				    <h5 class="card-title" style="color:white;">CPU</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="cpu.php" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
    		</div>	

    		<div class="col mt-5">
    			<div class="card" style="width: 18rem;">
				  <img src="img/monitor.jpg" class="card-img-top" alt="..." height="250rem">
				  <div class="card-body bg-dark">
				    <h5 class="card-title" style="color:white;">Monitor</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="monitor.php" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
    		</div>	

    	</div>

    	<div class="row mt-5">
    		<div class="col">
    			<div class="card" style="width: 18rem;" style="width: 18rem;">
				  <img src="img/keyboard.jpg" class="card-img-top" alt="..." height="250rem">
				  <div class="card-body bg-dark">
				    <h5 class="card-title" style="color:white;">Keyboard</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="motherboard.php" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
    		</div>	

    		<div class="col mt-5">
    			<div class="card" style="width: 18rem;" style="width: 18rem;">
				  <img src="img/mouse.jpg" class="card-img-top" alt="...">
				  <div class="card-body bg-dark">
				    <h5 class="card-title" style="color:white;">Mouse</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="ram.php" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
    		</div>	
    	</div>

	</div>
    <!-- end card -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>