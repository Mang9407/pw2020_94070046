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
//ambil id daru url
$id = $_GET['id'];
//query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id=$id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <li><img src="img/<?= $m['gambar']; ?>" width="250"></li>
  <li>NRP : <?= $m['nrp']; ?></li>
  <li>Nama : <?= $m['nama']; ?></li>
  <li>Email : <?= $m['email']; ?></li>
  <li>jurusan : <?= $m['jurusan']; ?></li>
  <li><a href="ubah.php?id=<?= $m['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm ('apakah anda Yakin akan Menghapus data?');">Hapus</a></li>
  <li><a href="index.php">Kembali Ke daftar Mahasiswa</a></li>

</body>

</html>