<?php
require 'functions.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
              alert('Registrasi Berhasil');
              document.location.href = 'login.php';
              </script>";
  } else {
    echo "<script>
              alert('Registrasi Gagal');
              </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/registrasi.css">
  <link rel="icon" type="image/png" href="../assets/img/tittle.jpg">
  <title>Registrasi</title>
</head>

<body>
  <form action="" method="post">
    <div class="kotak_registrasi">
      <p class="tulisan_registrasi">FORM REGISTRASI</p>
      <form>
        <label for="username">Username</label>
        <input type="text" name="username" class="form_registrasi" placeholder="Username .." required>

        <label for="password">Password</label>
        <input type="password" name="password" class="form_registrasi" placeholder="Password .." required>

        <button type="submit" name="register" class="tombol_registrasi">REGISTRASI</button>
        <br><br>
        <center>
          <a class="link" href="../index.php">KEMBALI</a>
        </center>


      </form>
</body>

</html>