<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form

$noantrian = $_GET['noantrian'];
$nama = $_POST['nama'];
$namaorangtua = $_POST['namaorangtua'];
$alamat = $_POST['alamat'];
$alergi = $_POST['alergi'];
 
// update data ke database
mysqli_query($koneksi,"update kons set nama='$nama',namaorangtua='$namaorangtua',alamat='$alamat',alergi='$alergi' where nama='$nama'");
// mengalihkan halaman kembali ke index.php
header("location:index.html");
?>