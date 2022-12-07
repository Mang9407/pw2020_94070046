<?php
require 'functions.php';

if (isset($_POST['daftar'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
    alert ('User Baru Telah di Tambahkan! Silakan Login');
    document.location.href = 'login.php';
    </script>";
  } else {
    echo "<script>
    alert ('User Gagal Di tambahkan! Silakan Ulangi Kembali');
    document.location.href = 'registrasi.php';
    </script>";
  };
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regitrasi</title>
</head>

<body>
  <h3>Form daftar</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Username :
          <input type="text" name="username" autofocus autocomplete="off" required>

        </label>
      </li>
      <li>
        <label>
          Password :
          <input type="password" name="password1" autocomplete="off" required>
        </label>
      </li>
      <li>
        <label>
          Ulangi Password
          <input type="password" name="password2" autocomplete="off" required>
        </label>
      </li>
      <li>
        <button type="submit" name="daftar">daftar</button>
      </li>
    </ul>
  </form>

</body>

</html>