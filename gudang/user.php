<?php 
session_start();
if(!empty($_SESSION['username']) and $_SESSION['level']=="user"){?>
  
  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/blog-home.css" rel="stylesheet">
  
  <style>
   body {background:"gambar.jpg;"}
  </style>


    <title>Web Gudang</title>
  </head>
  <body class="bg">
  <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
  <a class="navbar-brand" href="index.php">Gudang</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
  <a class="btn" role="button" href="home2.php">Home</a>
  </div>
<div class="navbar-nav">
  <a class="btn" href="cetak3.php" role="button">
    Laporan Stok
  </a>
</div>
<div class="navbar-nav">
  <a class="btn" href="cetak_penjualan3.php" role="button">
    Laporan Penjualan
  </a>
</div>
</div>
</nav>
  <?php 
}
?>