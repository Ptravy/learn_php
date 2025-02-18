<?php
require "function.php";

// Ambil data di URL
$id = $_GET["id"];

// Query data mahasiswa berdasrkan id
$flm = query("SELECT * FROM film WHERE id = $id")[0];

// Cek apakah tombol sudah di tekan
if(isset($_POST["submit"])){
  
  if(ubah($_POST) > 0){
    echo "
    <script>
      alert('Data Berhasil diubah!');
      document.location.href = 'index.php';
    </script>
    ";
  }else{
    echo " 
    <script>
      alert('Data Gagal diubah!');
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
  <title>Update Data Film</title>
</head>
<body>
  <h1>Update Data Film</h1>

  <form action="" method="POST">
    <input type="hidden" name="id" value="<?=  $flm["id"]; ?>">
    <ul>
      <li>
        <label for="judul">Judul: </label>  
        <input type="text" name="judul"  id="judul" require value="<?= $flm["judul"]; ?>">
      </li>
      <li>
        <label for="genre">Genre: </label>  
        <input type="text" name="genre"  id="genre" required value="<?= $flm["genre"]; ?>">
      </li>
      <li>
        <label for="sutradara">Sutradara: </label>
        <input type="text" name="sutradara" id="sutradara" required value="<?= $flm["sutradara"]; ?>">
      </li>
      <li>
        <label for="tahun">Tahun: </label>
        <input type="text" name="tahun" id="tahun" required value="<?= $flm["tahun"]; ?>">
      </li>
      <li>
        <label for="gambar">Gambar</label>
        <input type="text" name="gambar" id="gambar" required value="<?= $flm["gambar"]; ?>">
      </li>
      <li>
        <button type="submit" name="submit">Ubah Data</button>
      </li>
    </ul>

  </form>
</body>
</html>