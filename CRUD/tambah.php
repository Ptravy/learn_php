<?php
// Koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "movie");

// cek apakah tombol sudah di tekan
if(isset($_POST["submit"])){
  // ambil data dari tiap elemen dalam form
  $judul = $_POST["judul"];
  $genre = $_POST["genre"];
  $sutradara = $_POST["sutradara"];
  $tahun = $_POST["tahun"];
  $gambar = $_POST["gambar"];

  //query insert data
  $query = "INSERT INTO film
             VALUES
            ('', '$judul', '$genre', '$sutradara', '$tahun', '$gambar')
            "; 
  mysqli_query($conn, "$query");

  // cek apakah data berhasil di tambahkan
  if(mysqli_affected_rows($conn) > 0){
    echo "Berhasil!";
  }else{
    echo "Gagal!!!";
    echo "<br>";
    echo mysqli_error($conn);
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
        <input type="text" name="judul"  id="judul">
      </li>
      <li>
        <label for="genre">Genre: </label>  
        <input type="text" name="genre"  id="genre">
      </li>
      <li>
        <label for="sutradara">Sutradara: </label>
        <input type="text" name="sutradara" id="sutradara">
      </li>
      <li>
        <label for="tahun">Tahun: </label>
        <input type="text" name="tahun" id="tahun">
      </li>
      <li>
        <label for="gambar">Gambar</label>
        <input type="text" name="gambar" id="gambar">
      </li>
      <li>
        <button type="submit" name="submit">Kirim Data</button>
      </li>
    </ul>

  </form>
</body>
</html>