<?php
include '../../koneksi.php';

$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$keterangan = $_POST['keterangan'];
$debit = $_POST['debit'];
$kredit = $_POST['kredit'];
$saldo = $_POST['saldo'];

//query update
$query  = "UPDATE keuangan SET tanggal = '$tanggal', keterangan = '$keterangan', debit = '$debit', kredit = '$kredit', saldo = '$saldo'";
$query .= "WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
} else {
    echo "<script>alert('Data berhasil diubah.');window.location='../menulkeuangan.php';</script>";
}
