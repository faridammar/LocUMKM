<html>
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
              <li class="scroll-to-section"><a href="index.html" class="active">Home</a></li>
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

 <style>
    table {
      border-collapse: collapse;
      width: 1345px;
      margin: 8px;
    }
    
    th, td {
      text-align: left;
      padding:18px;
    }
    
    tr:nth-child(even){background-color: #f2f2f2}
    
    th {
      background-color: #3cb3f6;
      color: white;
    }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $("#myinput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>

    
  <div id="pricing" class="pricing-tables">  
    <table border="1">

		<tr>
			<th>Nomor Antrian</th>
			<th>Nama Anak</th>
			<th>Nama Orang Tua</th>
			<th>Alamat Domisili</th>
			<th>Alergi </th>
			<th>Action</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$noantrian = 1;
		$data = mysqli_query($koneksi,"select * from kons ORDER BY nama ASC");
		while($d = mysqli_fetch_array($data)){
		?>
      <tbody id="myTable">
			<tr>
				<td ><?php echo $d['noantrian']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['namaorangtua']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['alergi']; ?></td>
				<td>
        <a href="edit.php?noantrian">EDIT</a>
        <a href="hapus.php?noantrian=<?php echo $d['noantrian']; ?>">HAPUS</a>
 
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
    </div>
    </div>
    </div>
    </div>
</html>