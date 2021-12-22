<?php
include '../../koneksi.php';

$id = $_POST['id'];
$kodebarang = $_POST['kodebarang'];
$namabarang = $_POST['namabarang'];
$jumlahbarang = $_POST['jumlahbarang'];
$hargasatuan = $_POST['hargasatuan'];

//query update
$query  = "UPDATE persediaanbarang SET namabarang = '$namabarang', jumlahbarang = '$jumlahbarang', kodebarang = '$kodebarang', hargasatuan = '$hargasatuan'";
$query .= "WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
} else {
    echo "<script>alert('Data berhasil diubah.');window.location='../menupersediaanbarang.php';</script>";
}
