<?php

session_start();

if (!$_SESSION['id']) {
  header("location: login.php");
}
include('koneksi.php');
?>
<!DOCTYPE html>
<html>

<head>
  <title>E-TPS</title>
</head>

<body>

</body>

</html>