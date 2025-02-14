<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POST</title>
</head>
<body>
  <?php if(isset($_POST["submit"])) : ?>
  <h1>Hallo, Selamat Datang di Film <?= $_POST["Judul"] ?></h1>
  <?php endif; ?>

  <!-- Kalau action[Default]  -->
  <form action="film2.php" method="POST">
    Input Judul Film: 
    <input type="text" name="judul" id="">
    <br>
    <button type="submit" name="submit">Kirim</button>
  </form>
  
</body>
</html>