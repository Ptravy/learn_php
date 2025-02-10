<?php
//=========================
// Pengkondisian / Percabangan
// if else
// if else if else
// ternary
// switch

//=========================
//if else
// $x = 10;
// if($x < 20){
//   echo "Benar";
// }else{
//   echo "Salah";
// }

//=========================
//if else if else
// $x = 20;
// if($x < 20){
//   echo "Benar!";
// }else if($x == 20){
//   echo "Binggo!";
// }
// else{
//   echo "Salah!";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan PHP 3</title>
  <style>
    .warna-baris{
      background-color: silver;
    }
  </style>
</head>
<body>
  <table border="1" cellpadding="10" cellspacing="0">
    <!-- Bisa ganti {} jadi : dan endfor or endif -->
   <?php for($i = 1; $i <= 5; $i++):?>
    <?php if($i % 2 == 1) : ?>
    <tr class="warna-baris">
    <?php else : ?>
    <tr>
    <?php endif; ?>
      <?php for($j = 1; $j <= 5; $j++):?>
        <!-- Bisa pakai ?= untuk menggantikan echo -->
        <td><?= "$i, $j"; ?></td>
      <?php endfor ?>
    </tr>
   <?php
   endfor?>
  </table>
</body>
</html>