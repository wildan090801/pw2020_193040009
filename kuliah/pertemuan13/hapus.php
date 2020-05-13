<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
// kalo gaada id
if (!isset($_GET['id'])) {
  header(
    "Location: index.php"
  );
  exit;
}
$id = $_GET['id'];

if (hapus($_GET['id']) > 0) {
  echo "<script>
  alert('data berhasil dihapus');
  document.location.href='index.php';
  </script>";
} else {
  echo "data gagal dihapus!";
}
