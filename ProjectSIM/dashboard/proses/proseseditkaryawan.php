<?php
include '../../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];
$gaji = $_POST['gaji'];
$telepon = $_POST['telepon'];

//query update
$query  = "UPDATE karyawan SET nama = '$nama', alamat = '$alamat', jeniskelamin = '$jeniskelamin', gaji = '$gaji', telepon = '$telepon'";
$query .= "WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
} else {
    echo "<script>alert('Data berhasil diubah.');window.location='../menukaryawan.php';</script>";
}
