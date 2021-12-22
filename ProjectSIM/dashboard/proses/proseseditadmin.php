<?php
include '../../koneksi.php';

$id = $_POST['id'];
$nama = $_POST["nama"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$password = md5($password);
$hakakses = $_POST["hakakses"];


//query update
$query  = "UPDATE user SET nama = '$nama', email = '$email', username = '$username',password = '$password',hakakses = '$hakakses'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
          echo "<script>alert('Data berhasil diubah.');window.location='../menuadmin.php';</script>";
      }