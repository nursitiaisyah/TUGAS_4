<?php
include "navbar.php";
session_start();

//cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
header("location:index.php?pesan=gagal");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css>
    <style>
      .selamat{
      color: blue;
      margin-top: 20px ;
      }

      footer{
        padding: 20px 0;
        background-color: #000000;
        color: #FFFF00;
        text-align: center;
        position: absolute;
        bottom:0;
        left: 0;
        width: 100%;

      }
 
      } 
    </style>
    <title>BERANDA</title>
  </head>
  <body>
    <div class="selamat">
    <center>
    <h2>SELAMAT DATANG DI PORTAL PERPUSTAKAAN </h2>
    <h2>UNIVERSITAS GAJAYANA MALANG</h2>
    <img src="LOGO-UNIGA-ONLY.png" alt="Logo_Uniga" style="width:300px;height:300px;">
    </center>
  </div>
    <!--Footer-->
    <footer>
    <div class="container">
      <small> Copyright &copy; 2022 - Nur Siti Aisyah, All Rights Reserved.</small>
    </div>
  </footer>
  </body>
</html>