<?php
$mahasiswa = ["Rovy Saputra Nugeraha", "2101020012", "Teknik Informatika", "rovysaputra10@gmail.com"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <!-- Menggunakan Looping -->
  <ul>
    <?php  foreach($mahasiswa as $m ) : ?>
      <li><?= $m ?></li>
    <?php endforeach; ?>
  </ul>

  <!-- Menggunakan Echo -->
   <ul>
    <li><?= $mahasiswa[0]?></li>
    <li><?= $mahasiswa[1]?></li>
    <li><?= $mahasiswa[2]?></li>
    <li><?= $mahasiswa[3]?></li>
   </ul>
</body>
</html>