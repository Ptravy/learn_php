<?php
  // Koneksi Database
  $conn = mysqli_connect("localhost", "root", "", "movie");

  // Ambil Data dari tabel movie
  $result = mysqli_query($conn, "SELECT * FROM film");

   // =======================
  // ambil data (fect) mahasiswa dari objek result
  // mysqli_fetch_row() / mengembalikan array numerik
  // mysqli_fetch_assoc() / mengembalikan array associative
  // mysqli_fetch_array() / mengambil keduanya 
  // mysqli_fetch_object() /

  // =======================
  // Mengambil array numerik
  // $flm = mysqli_fetch_row($result);
  // var_dump($flm[2]);

  // =======================
  // Mengambil array asosiative
  // $flm = mysqli_fetch_assoc($result);
  // var_dump($flm["judul"]);

  // =======================
  // Looping
  // while($flm = mysqli_fetch_array($result)){
  //   var_dump($flm);
  // }
  


  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>
<body>
  <h1>Daftar Film</h1>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Cover</th>
      <th>Judul</th>
      <th>Genre</th>
      <th>Sutradara</th>
      <th>Tahun</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1; ?>
    <?php while($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
      <td><?= $i; ?></td>
      <td><img src="../Associative_Array/img/<?= $row["gambar"]; ?>" alt="gambar" width="50" height="50"></td>
      <td><?= $row["judul"]; ?></td>
      <td><?= $row["genre"]; ?></td>
      <td><?= $row["sutradara"]; ?></td>
      <td><?= $row["tahun"]; ?></td>
      <td>
        <a href="">Edit</a> | 
        <a href="">Delete</a>
      </td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>
  </table>
</body>
</html>