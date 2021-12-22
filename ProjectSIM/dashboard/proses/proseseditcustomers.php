<?php
include '../../koneksi.php';

$id = $_POST['id'];
$nama = $_POST["nama"];
$jeniskelamin = $_POST["jeniskelamin"];
$telp = $_POST["telp"];
$alamat = $_POST["alamat"];


//query update
$query  = "UPDATE customers SET nama = '$nama', jeniskelamin = '$jeniskelamin', telp = '$telp',alamat = '$alamat'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
          echo "<script>alert('Data berhasil diubah.');window.location='../menucustomers.php';</script>";
      }