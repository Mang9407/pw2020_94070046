<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("location:login.php");
  exit;
}
require 'functions.php';

if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}
// mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('data berhasil dihapus');
          document.location.href = 'index.php';
       </script>";
} else {
  echo "data gagal ditambahkan!";
}
