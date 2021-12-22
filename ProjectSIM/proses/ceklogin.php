<?php

session_start();

include('../koneksi.php');

$username     = $_POST['username'];
$password      = MD5($_POST['password']);

//query
$query  = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result     = mysqli_query($koneksi, $query);
$num_row     = mysqli_num_rows($result);
$row         = mysqli_fetch_array($result);

if($num_row >=1) {
    
    echo "success";

    $_SESSION['id']    = $row['id'];
        $_SESSION['nama']    = $row['nama'];
        $_SESSION['username']    = $row['username'];
        $_SESSION['password']    = $row['password'];
        $_SESSION['hakakses']    = $row['hakakses'];

} else {
    
    echo "error";

}

?>