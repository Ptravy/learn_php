<?php
 // Koneksi Database
 $conn = mysqli_connect("localhost", "root", "", "movie");

function query($query){
  global $conn;
  $result = mysqli_query($conn, $query);

  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data){
  global $conn;
  // ambil data dari tiap elemen dalam form
  $judul = htmlspecialchars($data["judul"]);
  $genre = htmlspecialchars($data["genre"]);
  $sutradara = htmlspecialchars($data["sutradara"]);
  $tahun = htmlspecialchars($data["tahun"]);
  $gambar = htmlspecialchars($data["gambar"]);

   //query insert data
   $query = "INSERT INTO film
   VALUES
  ('', '$judul', '$genre', '$sutradara', '$tahun', '$gambar')
  "; 
mysqli_query($conn, "$query");

return mysqli_affected_rows($conn);

}
?>