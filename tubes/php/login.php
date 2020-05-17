<?php
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

// melakukan pengecekan apakah user sudah melakukan Login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}
// Login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  // mencocokan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
      // jika remember me dicentang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }
      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location; ../index.php");
      die;
    }
  }
  $error = true;
}
?>
<link rel="icon" type="image/png" href="../assets/img/tittle.jpg">
<title>NadLiw Music</title>
<link rel="stylesheet" href="../css/login.css" type="text/css">
<h1>FORM LOGIN</h1>
<form action="" method="post">
  <div class="imgcontainer">
    <img src="../assets/img/avatar.jpg" alt="Avatar" class="avatar">
  </div>
  <?php if (isset($error)) : ?>
    <p style="color: red; font-style: italic;">Username atau Password salah</p>
  <?php endif; ?>
  <div class="container">
    <label for="username">Username</label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password">Password</label>
    <input type="password" placeholder="Enter Password" name="password" required>
  </div>
  <div class="remember">
    <input type="checkbox" name="remember">
    <label for="remember">Remember Me</label>
  </div>
  <button type="submit" name="submit">Login</button>
  <div class="registrasi">
    <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
  </div>
</form>