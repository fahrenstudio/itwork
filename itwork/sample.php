<?php 



function upload(){
  $namafile = $_FILE["gambar"]["name"];
  $size = $_FILE["gambar"]["size"];
  $error = $_FILE["gambar"]["error"];
  $tmp = $_FILE["gambar"]["tmp_name"];



  if ($error === 4) {
    $pesan_error = "tidak ada gambar yang di masukan";

    die;
  }
}

 ?>