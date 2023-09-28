<?php 
// koneksi database
include 'koneksi.php';
// menangkap data id yang di kirim dari url
$noantrian = $_GET['noantrian'];
// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM kons WHERE noantrian='$noantrian'");
// mengalihkan halaman kembali ke index.php
header("Location: index.html");

?>