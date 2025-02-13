<?php
// Array Multi Dimensi/ Array di dalam Array
// Array Numerik
$mahasiswa = [["Rovy Saputra Nugeraha", "2101020012", "Teknik Informatika", "rovysaputra10@gmail.com"], 
["Cindi Aulia Ladiesta", "2101020013", "Teknik Informatika", "rovysaputra10@gmail.com"], 
["Syah Alam Muda", "2101020014", "Teknik Informatika", "rovysaputra10@gmail.com"]
];
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

  <?php foreach($mahasiswa as $mhs ) : ?>
    <ul>
      <li>Nama : <?= $mhs[0] ?></li>
      <li>NIM : <?= $mhs[1] ?></li>
      <li>Jurusan : <?= $mhs[2] ?></li>
      <li>Email : <?= $mhs[3] ?></li>
    </ul>
  <?php endforeach; ?>
</body>
</html>