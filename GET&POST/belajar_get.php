<?php
// ===========================
// Varibel Scope / Lingkup Variabel
// $x = 10;

// function tampilx(){
//   global $x;
//   echo $x;
// }

// tampilx();

// ===========================
// Superglobals adalah Array Associative
// $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER & $_ENV

// ===========================
// $_GET
$movie = [
  ["cover"=>"1.jpg", "Judul"=>"Dilan 1990", "Genre"=>"Romantis", "Sutradara"=>"Rovy Saputra N", "Tahun"=>"2019"],
  ["cover"=>"1.jpg", "Judul"=>"Agak Lain", "Genre"=>"Komedi", "Sutradara"=>"Cindi Aulia L", "Tahun"=>"2020"],
  ["cover"=>"1.jpg", "Judul"=>"Ipar Adalah Maut", "Genre"=>"Drama", "Sutradara"=>"Rovy Saputra N", "Tahun"=>"2021"],
  ["cover"=>"1.jpg", "Judul"=>"Pengabdi Setan", "Genre"=>"Horor", "Sutradara"=>"Rovy Saputra N", "Tahun"=>"2022"],
  ["cover"=>"1.jpg", "Judul"=>"Kuntilanak", "Genre"=>"horor", "Sutradara"=>"Cindi Aulia L", "Tahun"=>"2021"],
  ["cover"=>"1.jpg", "Judul"=>"Dilan 1991", "Genre"=>"Romantis", "Sutradara"=>"Cindi Aulia L", "Tahun"=>"2023"],
  ["cover"=>"1.jpg", "Judul"=>"Milea", "Genre"=>"Romantis", "Sutradara"=>"Cindi Aulia L", "Tahun"=>"2023"],
  ["cover"=>"1.jpg", "Judul"=>"Petaka Gunung Gede", "Genre"=>"Horor", "Sutradara"=>"Rovy Saputra N", "Tahun"=>"2024"],
  ["cover"=>"1.jpg", "Judul"=>"Cek Toko Sebelah", "Genre"=>"Komedi", "Sutradara"=>"Cindi Aulia L", "Tahun"=>"2024"],
  ["cover"=>"1.jpg", "Judul"=>"Ngeri Ngeri Sedap", "Genre"=>"Komedi", "Sutradara"=>"Rovy Saputra N", "Tahun"=>"2025"]
  ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET</title>
</head>
<body>
  <h1>Daftar Film</h1>
  <!-- Metode Get untuk menangkap Global Data -->
  <ul>
  <?php foreach($movie as $mv) : ?>
    <li><a href="film1.php?Judul=<?= $mv["Judul"]; ?>&Genre=<?= $mv["Genre"]; ?>&Sutradara=<?= $mv["Sutradara"]; ?>&Tahun=<?= $mv["Tahun"]; ?>"> Film: <?= $mv["Judul"]; ?></li>
  <?php endforeach; ?>
  </ul>
 
</body>
</html>