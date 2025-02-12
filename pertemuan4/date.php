<?php
//=========================
// DATE
// Menampilkan dengan format tertentu
  // echo date("l, d-M-Y");

//========================= 
// TIME
// UNIX Timestamp / EPOCH Time
// Detik yang sudah berlalu sejak 1 Januari 1970 
// echo time();
// echo date("d M Y", time()-60*60*24*100);

//=========================
// MKTIME
// Membuat sendiri detiknya
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,10,10,2002));

//=========================
// STRTOTIME
// echo date("l", strtotime("10 Oktober 2002"));
?>