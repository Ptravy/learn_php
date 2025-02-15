<?php
 require 'function.php';
 
 $film = query("SELECT * FROM film");

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
    <?php foreach($film as $row) : ?>
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
    <?php endforeach; ?>
  </table>
</body>
</html>