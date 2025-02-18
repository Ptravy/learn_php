<?php
 require 'function.php';
 
 $film = query("SELECT * FROM film");

 // Tombol cari di klik
 if(isset($_POST["cari"])){
  $film = cari($_POST["keyword"]);
  
 }

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

  <a href="tambah.php">Tambah Data Film</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="30" autofocus placeholder="Masukan Keyword Pencarian" autocomplete="off">
    <button type="submit" name="cari">Cari</button>
  </form>
  <br>

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
        <a href="update.php?id=<?= $row["id"]; ?>">Edit</a> | 
        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin?')">Delete</a>
      </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>
</html>