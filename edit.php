<html>
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
<?php
  include 'koneksi.php';
  $data = mysqli_query($koneksi,"SELECT * FROM `kons` WHERE noantrian");
  while($d = mysqli_fetch_array($data)){
    ?>
<form method="post" action="update.php" class="form-horizontal">
<div class="container">
	<div class="mb-3">
    <input type="hidden" name="no" value="<?php echo $d['noantrian']; ?>">
    <label for="exampleFormControlInput1" class="form-label">Nama Lengkap: </label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="<?php echo $d['nama']; ?>">

</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama Orang Tua: </label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="namaorangtua" value="<?php echo $d['namaorangtua']; ?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Alamat Domisili: </label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat">
<?php echo $d['alamat'];?>
  </textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Kamu Alergi Apa: </label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="alergi" value="<?php echo $d['alergi']; ?>">
</div>

</form>       
<button type="submit" class="btn btn-success">Submit</button>

    <?php
  }
  ?>
</html>