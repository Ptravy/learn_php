<?php
  // ===============================
  // Array Associative
  // Key nya adalah string yang dibuat sendiri
  $mahasiswa = [
    ["nama"=>"Rovy Saputra", 
    "NIM"=> "2101020012",
    "email"=> "rovysaputra10@gmail.com",
    "jurusan"=> "Teknik Informatika",
    "img"=> "1.jpg"],
    ["nama"=>"Cindi Aulia", 
    "NIM"=> "2101020013",
    "email"=> "rovysaputra13@gmail.com",
    "jurusan"=> "Teknik Informatika",
    "img"=> "2.jpg"],
    ["nama"=>"Syah Alam", 
    "NIM"=> "2101020014",
    "email"=> "rovysaputra14@gmail.com",
    "jurusan"=> "Teknik Informatika",
    "img"=> "3.jpg"]
];
// Menampilakan salah satu data
    // echo $mahasiswa[0]["Email"]
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftra Mahasiswa</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach($mahasiswa as $mhs) : ?>
  <ul>
   <li>
      <img src="../Associative_Array/img/<?= $mhs["img"] ?>" alt="gambar" width="100" height="100">
    </li>
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NIM : <?= $mhs["NIM"]; ?></li>
    <li>Email : <?= $mhs["email"]; ?></li>
    <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
  </ul>
  <?php endforeach; ?>
</body>
</html>