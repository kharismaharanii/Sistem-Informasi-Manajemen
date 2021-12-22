<?php
include '../../koneksi.php';

$id = $_POST['id'];
$namatoko = $_POST["namatoko"];
$telp = $_POST["telp"];
$alamat  = $_POST["alamat"];
$deskripsi = $_POST["deskripsi"];


//query update
$query  = "UPDATE suppliers SET namatoko = '$namatoko', telp = '$telp', alamat = '$alamat',deskripsi = '$deskripsi'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
          echo "<script>alert('Data berhasil diubah.');window.location='../menusuppliers.php';</script>";
      }