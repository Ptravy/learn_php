<?php
// ===========================
// Array
// Varibel yang dapat memiliki banyak nilai
// array adalah pasangan antara key dan value
// key-nya adalah index, yang dimulai dari [0]

// ===========================
// Cara Lama
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");

// ===========================
// Cara Baru
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

$arr1 = [123, "test", false];

// ===========================
// Menampilkan Array
// var_dump() / print_r()
var_dump($hari);
echo "<br>"; 
print_r($bulan);

// ===========================
// // Menampilkan 1 elemen pada array
echo $arr1[0];
echo "<br>";
echo $bulan[1];

// ===========================
// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Minggu";
$hari[] = "Cuti";
echo "<br>";
var_dump($hari);

?>