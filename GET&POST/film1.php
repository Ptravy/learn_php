<?php
// Cek Data yang di input
if(!isset($_GET["Judul"]) || 
   !isset($_GET["Genre"]) ||
   !isset($_GET["Sutradara"])||
   !isset($_GET["Tahun"])){
  // Redirect ke halaman tertentu
  header("Location: belajar_get.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Film</title>
</head>
<body>
  <ul>
    <li><img src="../Associative_Array/img/1.jpg" alt="gambar" width="100" height="100"></li>
    <li>Judul Film: <?= $_GET["Judul"]; ?></li>
    <li>Genre Film: <?= $_GET["Genre"]; ?></li>
    <li>Sutradara Film:  <?= $_GET["Sutradara"]; ?></li>
    <li>Tahun Film: <?= $_GET["Tahun"]; ?></li>
  </ul>
  <button><a href="belajar_get.php">Kembali</button>
</body>
</html>