<!-- Tugas Buat Sendiri -->
 <?php
  $movie = [
    ["cover"=>"1.jpg", "Judul"=>"Dilan 1990", "Genre"=>"Romantis", "Sutradara"=>"Rovy Saputra N", "Tahun"=>"2019"],
    ["cover"=>"2.jpg", "Judul"=>"Agak Lain", "Genre"=>"Komedi", "Sutradara"=>"Cindi Aulia L", "Tahun"=>"2020"],
    ["cover"=>"3.jpg", "Judul"=>"Ipar Adalah Maut", "Genre"=>"Drama", "Sutradara"=>"Rovy Saputra N", "Tahun"=>"2021"],
    ["cover"=>"4.jpg", "Judul"=>"Pengabdi Setan", "Genre"=>"Horor", "Sutradara"=>"Rovy Saputra N", "Tahun"=>"2022"],
    ["cover"=>"5.jpg", "Judul"=>"Kuntilanak", "Genre"=>"horor", "Sutradara"=>"Cindi Aulia L", "Tahun"=>"2021"],
    ["cover"=>"6.jpg", "Judul"=>"Dilan 1991", "Genre"=>"Romantis", "Sutradara"=>"Cindi Aulia L", "Tahun"=>"2023"],
    ["cover"=>"7.jpg", "Judul"=>"Milea", "Genre"=>"Romantis", "Sutradara"=>"Cindi Aulia L", "Tahun"=>"2023"],
    ["cover"=>"8.jpg", "Judul"=>"Petaka Gunung Gede", "Genre"=>"Horor", "Sutradara"=>"Rovy Saputra N", "Tahun"=>"2024"],
    ["cover"=>"9.jpg", "Judul"=>"Cek Toko Sebelah", "Genre"=>"Komedi", "Sutradara"=>"Cindi Aulia L", "Tahun"=>"2024"],
    ["cover"=>"10.jpg", "Judul"=>"Ngeri Ngeri Sedap", "Genre"=>"Komedi", "Sutradara"=>"Rovy Saputra N", "Tahun"=>"2025"]
    ]
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dafta Film Indonesia</title>
 </head>
 <body>
  <h1>Film Layar Kaca Indonesia</h1>
  <?php foreach($movie as $mv) : ?>
  <ul>
    <li>
      <img src="../Associative_Array/img/<?= $mv["cover"] ?>" alt="gambar film" width="100" height="100">
    </li>
    <li>Nama Film : <?= $mv["Judul"] ?></li>
    <li>Genre Film : <?= $mv["Genre"] ?></li>
    <li>Sutradara Film : <?= $mv["Sutradara"] ?></li>
    <li>Tahun Rilis Film : <?= $mv["Tahun"] ?></li>
  </ul>
  <?php endforeach; ?>
 </body>
 </html>