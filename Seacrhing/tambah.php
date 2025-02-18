<?php
require "function.php";
// cek apakah tombol sudah di tekan
if(isset($_POST["submit"])){
  
  if(tambah($_POST) > 0){
    echo "
    <script>
      alert('Data Berhasil ditambahkan!');
      document.location.href = 'index.php';
    </script>
    ";
  }else{
    echo " 
    <script>
      alert('Data Gagal ditambahkan!');
      document.location.href = 'index.php';
    </script>
    "; 
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Film</title>
</head>
<body>
  <h1>Tambah Data Film</h1>

  <form action="" method="POST">
    <ul>
      <li>
        <label for="judul">Judul: </label>  
        <input type="text" name="judul"  id="judul" require>
      </li>
      <li>
        <label for="genre">Genre: </label>  
        <input type="text" name="genre"  id="genre" required>
      </li>
      <li>
        <label for="sutradara">Sutradara: </label>
        <input type="text" name="sutradara" id="sutradara" required>
      </li>
      <li>
        <label for="tahun">Tahun: </label>
        <input type="text" name="tahun" id="tahun" required>
      </li>
      <li>
        <label for="gambar">Gambar</label>
        <input type="text" name="gambar" id="gambar" required>
      </li>
      <li>
        <button type="submit" name="submit">Kirim Data</button>
      </li>
    </ul>

  </form>
</body>
</html>