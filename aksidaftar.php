<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$noantrian = $_POST['noantrian'];
$nama = $_POST['nama'];
$namaorangtua = $_POST['namaorangtua'];
$alamat = $_POST['alamat'];
$alergi = $_POST['alergi'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into kons (noantrian,nama,namaorangtua,alamat,alergi) values('$noantrian','$nama','$namaorangtua','$alamat','$alergi')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.html");
?>