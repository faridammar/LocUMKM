<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

<title>XC Project - Susu Anti Laktosa</title>
<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Additional CSS Files -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css">
<link rel="stylesheet" href="assets/css/animated.css">
<link rel="stylesheet" href="assets/css/owl.css">
</head>
<header class="header-area header-sticky wow slideInDown" data-wow-duration="1s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            
            <!-- logo web susu anti laktosa--><a href="index.html" class="logo">
              <img src="assets/images/logo.png" alt="Chain App Dev">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li>
              <li class="scroll-to-section"><a href="#pricing">Pricing</a></li>
              <li class="scroll-to-section"><a href="#newsletter">Newsletter</a></li>
              <input id="myinput" type="text" placeholder="Search..">
              <button type="submit"><i class="fa fa-search"></i></button>
              <li><div class="gradient-button"><a id="modal_trigger" href="#modal"><i class="fa fa-sign-in-alt"></i> Sign In Now</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>

 <br>
 <br>
 <br>
 <br>
 <br>
 <br>

 <?php
// Koneksi database
include 'koneksi.php';

// Menangkap nomor antrian yang diambil dari parameter URL
$noantrian = $_GET['noantrian'];

// Query untuk mengambil data yang akan diupdate
$result = mysqli_query($koneksi, "SELECT * FROM kons WHERE noantrian='$noantrian'");

// Memeriksa apakah data ditemukan
if (!$result || mysqli_num_rows($result) == 0) {
    echo "Data tidak ditemukan!";
    exit;
}

// Mengambil data yang akan diedit
$data = mysqli_fetch_assoc($result);

// Memproses form update jika data dikirimkan
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $namaorangtua = $_POST['namaorangtua'];
    $alamat = $_POST['alamat'];
    $alergi = $_POST['alergi'];

    // Update data ke database
    $query = "UPDATE kons SET nama='$nama', namaorangtua='$namaorangtua', alamat='$alamat', alergi='$alergi' WHERE noantrian='$noantrian'";
    $update_result = mysqli_query($koneksi, $query);

    // Memeriksa apakah pembaruan berhasil
    if ($update_result) {
        echo "Data berhasil diperbarui.";
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($koneksi);
    }
}
?>
    <form method="POST" action="">
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" placeholder="Nama"><br>
        <input type="text" name="namaorangtua" value="<?php echo $data['namaorangtua']; ?>" placeholder="Nama Orang Tua"><br>
        <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" placeholder="Alamat"><br>
        <input type="text" name="alergi" value="<?php echo $data['alergi']; ?>" placeholder="Alergi"><br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>
