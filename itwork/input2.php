<?php 
session_start();
if(!isset($_SESSION["admin"])){
  header("Location: login.php");
  exit;
}

if(isset($_POST["input"])){

$conn = mysqli_connect("localhost", "root", "", "dbuser");

$namafile = $_FILES["gambar"]["name"];
$ukuranfile = $_FILES["gambar"]["size"];
$error = $_FILES["gambar"]["error"];
$tmp = $_FILES["gambar"]["tmp_name"];

if($error === 4){
    echo "<script> alert('gambar belum di masukan');";
    exit;
}
$ekstensivalid = ['jpg', 'jpeg', 'png'];
$ekstensi = explode('.', $namafile);
$ekstensi = strtolower(end($ekstensi));

if(!in_array($ekstensi, $ekstensivalid)){
    echo "<script> alert('yang anda inputkan bukanlah file');";
    exit;
}
$gambar = $namafile;
move_uploaded_file($tmp, 'img/' . $namafile);

	$conn = mysqli_connect("localhost", "root", "", "dbuser");
	$admin = htmlspecialchars($_POST["admin"]);
	$judul = htmlspecialchars($_POST["judul"]);
	$isi = htmlspecialchars($_POST["isi"]);

	$query = "INSERT INTO dataweb2 VALUES ('', '$admin', '$judul', '$isi', '$gambar')"; 
	
	mysqli_query($conn, $query);
	echo mysqli_error($conn);

	$succes = "<div class='alert alert-success mt-5' role='alert'>
			  <h4 class='alert-heading'>Data berhasil masuk!</h4>
			  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
			  </div>";
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

    <!-- form -->
    <div class="container border border-dark mt-5">
    	<form action="" method="post" enctype="multipart/form-data">
    		<label for="admin">Name Admin: </label>
            <input type="text" class="form-control" id="admin" placeholder="Nama Admin..." name="admin" required>
            <label for="judul">Tittle: </label>
            <input type="text" class="form-control" id="judul" placeholder="Contoh: motherboard, cpu..." name="judul" required>
            <label for="isi">Isi: </label>
    		<textarea class="form-control" id="isi" rows="3" name="isi" required></textarea>
        <label for="gambar"></label>
        <input type="file" name="gambar" id="gambar"><br>
    		<button type="submit" class="btn btn-info mt-5" name="input">Input Data!</button>
    	</form>
    </div>

    <div class="container">
    	<?php if (isset($_POST["input"])) {
    		echo $succes;
    	} ?>
    </div>



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