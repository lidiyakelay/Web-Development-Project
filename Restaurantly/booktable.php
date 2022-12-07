<?php

include 'dbcon/bookdb.php';
if(empty($_SESSION["id"])){
    header("Location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Book a table</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
	

	<title>Table Reseravation</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
    

	

</head>

<body>
  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Restaurantly</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="home.php">Home</a></li>
          <li><a class="nav-link scrollto" href="Resevation.php">Reservation</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="logout.php" class="book-a-table-btn scrollto d-none d-lg-flex">Log Out</a>

    </div>
  </header><!-- End Header -->

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<br> <br> <br> <br>
						<div class="form-header">
							<h1>Book a Table</h1>
						</div>
						<form class="form-inline m-2" action="create.php" method="POST">
							<div class="row">
								<div class="col-sm-6">
                                    <!--INPUT FORM FOR NAME-->
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control" type="text" placeholder="Enter your name" id="name" name="name">
									</div>
								</div>
								<div class="col-sm-6">
                                    <!--INPUT FORM FOR PHONE-->
									<div class="form-group">
										<span class="form-label">Phone</span>
										<input class="form-control" type="tel" placeholder="Enter your phone" id="phone" name="phone">
									</div>
								</div>
							</div>
							 <!--INPUT FORM FOR NUMBER OF PEOPLE-->
                             <div class="row">
                            <div class="col-sm-6">
							<div class="form-group">
								<span class="form-label">Number of People</span>
								<input class="form-control" type="number" min="1" max="10" placeholder="Enter number of People" id="numpeople" name="numpeople">
							</div></div>
                             <!--INPUT FORM FOR DESCRIPTION-->
                            <div class="col-sm-6" >
							<div class="form-group">
								<span class="form-label">Description</span>
								<input class="form-control" type="text" placeholder="Enter Description" id="description" name="description">
							</div></div></div>
                             <!--INPUT FORM FOR DATE-->
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Date</span>
										<input class="form-control" type="date" required id="date" name="date" min="3000-01-01" onfocus="this.min=new Date().toISOString().split('T')[0]">
									</div>
								</div>
                                
							<div class="form-btn">
								<button type="submit" class="submit-btn">Book Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
