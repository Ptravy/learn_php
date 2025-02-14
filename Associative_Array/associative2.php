<?php
  // $mahasiswa = [
  //   ["Rovy Saputra", "2101020012", "Teknik Informatika", "rovysaputra10@gmail.com"],
  //   ["Cindi AL", "2101020013", "Teknik Informatika", "rovysaputra14@gmail.com"]
  // ];

  // ===============================
  // Array Associative
  // Key nya adalah string yang dibuat sendiri
  $mahasiswa = [
    ["nama"=>"Rovy Saputra", 
    "NIM"=> "2101020012",
    "email"=> "rovysaputra10@gmail.com",
    "jurusan"=> "Teknik Informatika"],
    ["nama"=>"Cindi Aulia", 
    "NIM"=> "2101020013",
    "email"=> "rovysaputra13@gmail.com",
    "jurusan"=> "Teknik Informatika"],
    ["nama"=>"Syah Alam", 
    "NIM"=> "2101020014",
    "email"=> "rovysaputra14@gmail.com",
    "jurusan"=> "Teknik Informatika"]
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
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NIM : <?= $mhs["NIM"]; ?></li>
    <li>Email : <?= $mhs["email"]; ?></li>
    <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
  </ul>
  <?php endforeach; ?>
</body>
</html>