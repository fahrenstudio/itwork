<?php  
session_start();
$_SESSION["admin"] = true;

$conn = mysqli_connect("localhost", "root", "", "dbuser");

$result = mysqli_query($conn, "SELECT * FROM user");

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
            </li>
          </ul>
        </div>
      </div>
      </nav>
    <!-- endnav -->

    <h1 align="center" class="mt-5">Data Pengguna:</h1>

    <!-- tabel -->
    <table cellspacing="0" class="container mt-5">
        <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Edit</th>
                </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $row["username"];?></td>
                    <td><?= $row["password"];?></td>
                    <td><a href="#">Edit</a> : <a href="#">Delete</a></td>
                </tr>
        </tbody>
    	<?php endwhile; ?>
    </table>
    <!-- end tabel -->

    <h1 class="mt-5" align="center">Input Informasi:</h1>

    <!-- input -->

   <div class="container" align="center">
   <div class="row">

     <div class="col">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="img/value1.webp" alt="..." style="width:200px;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title" style="color:black;">Processor</h5>
                <p class="card-text" style="color:black;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted"><a href="input.php"><button type="button" class="btn btn-info">Processor</button></a></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>

   </div>

    <div class="row">
    
     <div class="col">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="img/value2.webp" alt="..." style="width:200px;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title" style="color:black;">Power Supply</h5>
                <p class="card-text" style="color:black;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted"><a href="input2.php"><button type="button" class="btn btn-info">Power supply</button></a></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>

   </div>

    <div class="row">
    
     <div class="col">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="img/value3.jpg" alt="..." style="width:200px;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title" style="color:black;">Motherboard</h5>
                <p class="card-text" style="color:black;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted"><a href="input3.php"><button type="button" class="btn btn-info">Motherboard</button></a></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>

   </div>

    <div class="row">
    
     <div class="col">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="img/value4.jpg" alt="..." style="width:200px;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title" style="color:black;">Ram</h5>
                <p class="card-text" style="color:black;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted"><a href="input4.php"><button type="button" class="btn btn-info">Ram</button></a></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>

   </div>

    <div class="row">
    
     <div class="col">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="img/value5.jpeg" alt="..." style="width:200px;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title" style="color:black;">Hardisk</h5>
                <p class="card-text" style="color:black;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted"><a href="input5.php"><button type="button" class="btn btn-info">Hardisk</button></a></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>

   </div>

    <div class="row">
    
     <div class="col">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="img/monitor.jpg" alt="..." style="width:200px;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title" style="color:black;">Monitor</h5>
                <p class="card-text" style="color:black;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted"><a href="input5.php"><button type="button" class="btn btn-info">Monitor</button></a></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>

   </div>

    <div class="row">
    
     <div class="col">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="img/keyboard.jpg" alt="..." style="width:200px;" class="mt-5">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title" style="color:black;">Keyboard</h5>
                <p class="card-text" style="color:black;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted"><a href="input5.php"><button type="button" class="btn btn-info">Keyboard</button></a></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>

   </div>

    <div class="row">
    
     <div class="col">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="img/mouse.jpg" alt="..." style="width:200px;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title" style="color:black;">Mouse</h5>
                <p class="card-text" style="color:black;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted"><a href="input5.php"><button type="button" class="btn btn-info">Mouse</button></a></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>

   </div>

  </div>


    <!-- end input -->



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