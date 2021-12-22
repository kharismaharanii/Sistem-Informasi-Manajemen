<?php
session_start();
if (!$_SESSION['id']) {
	header("location: ../login.php");
}
include('../koneksi.php');



//persediaanbarang
$data2 = mysqli_query($koneksi, "SELECT namabarang FROM persediaanbarang");
$jumlah_data2 = mysqli_num_rows($data2);

//customer
$data3 = mysqli_query($koneksi, "SELECT nama FROM customers");
$jumlah_data3 = mysqli_num_rows($data3);

//supliyer
$data4 = mysqli_query($koneksi, "SELECT namatoko FROM suppliers");
$jumlah_data4 = mysqli_num_rows($data4);

//karyawan
$data5 = mysqli_query($koneksi, "SELECT nama FROM karyawan");
$jumlah_data5 = mysqli_num_rows($data5);
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
	<title>E-TPS</title>

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<!--fontawesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

	<link rel="stylesheet" href="font/font/flaticon.css">
	<link rel="stylesheet" type="text/css" href="../asset/style.css">
</head>



<body>


	<div id="wrapper">
		<div class="overlay"></div>

		<!-- Sidebar -->
		<nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
			<div class="simplebar-content" style="padding: 0px;">
				<a class="sidebar-brand" href="dashboard.php">
					<span class="align-middle"><i class="fa fa-shopping-cart" style="font-size:24px"></i> E-TPS</span>
				</a>

				<ul class="navbar-nav align-self-stretch">
					<li class="">
						<a class="nav-link text-left active" href="dashboard.php" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
						</a>
					</li>

					<li class="">
						<a class="nav-link text-left active" href="menulkeuangan.php" role="button" aria-haspopup="true" aria-expanded="false">
							<i style="font: size 10px;" class="fa">&#xf200;</i> Laporan Keuangan
						</a>
					</li>

					<li class=" ">
						<a class="nav-link text-left active" href="menupersediaanbarang.php" role="button">
							<i style='font-size:15px' class='fas'>&#xf07b;</i> Inventory
						</a>
					</li>

					<li class=" ">
						<a class="nav-link text-left active" href="menucustomers.php" role="button">
							<i class="icon-group"></i>Customers
						</a>
					</li>

					<li class=" ">
						<a class="nav-link text-left active" href="menusuppliers.php" role="button">
							<i class="flaticon-bar-chart-1"></i> <i class="fa fa-truck" aria-hidden="true"></i>Suppliers
						</a>
					</li>

					<li class=" ">
						<a class="nav-link text-left active" href="menukaryawan.php" role="button">
							<i style='font-size:15px' class='fas'>&#xf500;</i> Karyawan
						</a>
					</li>

					<li class="">
						<a class="nav-link text-left active" href="menuadmin.php" role="button">
							<i class="flaticon-bar-chart-1"></i><i class="fa fa-user" style="font-size:15px"></i> Admin
						</a>
					</li>
					<li class="">
						<a class="nav-link text-left active" href="../logout.php " role="button">
							<i class="flaticon-bar-chart-1"></i> <i class="fa fa-sign-out" style="font-size:15px"></i> Logout
						</a>
					</li>

				</ul>

			</div>
		</nav>
		<!-- /#sidebar-wrapper -->



		<!-- Page Content -->
		<div id="page-content-wrapper">


			<div id="content">

				<div class="container-fluid p-0 px-lg-0 px-md-0">
					<!-- Topbar -->
					<nav class="navbar navbar-expand navbar-light my-navbar">

						<!-- Sidebar Toggle (Topbar) -->
						<div type="button" id="bar" class="nav-icon1 hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
							<span></span>
							<span></span>
							<span></span>
						</div>


						<!-- Topbar Search -->
						<form class="d-none d-sm-inline-block form-inline navbar-search">
							<div class="input-group">
								<input type="text" class="form-control bg-light " placeholder="Search for..." aria-label="Search">
								<div class="input-group-append">
									<button class="btn btn-primary" type="button">
										<i class="fas fa-search fa-sm"></i>
									</button>
								</div>
							</div>
						</form>

						<!-- Topbar Navbar -->
						<ul class="navbar-nav ml-auto">

							<!-- Nav Item - Search Dropdown (Visible Only XS) -->
							<li class="nav-item dropdown  d-sm-none">

								<!-- Dropdown - Messages -->
								<div class="dropdown-menu dropdown-menu-right p-3">
									<form class="form-inline mr-auto w-100 navbar-search">
										<div class="input-group">
											<input type="text" class="form-control bg-light border-0 small" placeholder="Search for...">
											<div class="input-group-append">
												<button class="btn btn-primary" type="button">
													<i class="fas fa-search fa-sm"></i>
												</button>
											</div>
										</div>
									</form>
								</div>
							</li>

							<!-- Nav Item - User Information -->
							<?php
							$tampilPeg    = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$_SESSION[username]'");
							$peg    = mysqli_fetch_array($tampilPeg);
							?>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
									<span class="mr-2 d-none d-lg-inline text-gray-600 small">Hai, <?= $peg['nama'] ?></span>
									<img class="img-profile rounded-circle" src="../img/logo.png">
								</a>
							</li>

						</ul>

					</nav>
					<!-- End of Topbar -->

					<!-- Begin Page Content -->
					<div class="container-fluid px-lg-4">
						<div class="row">
							<div class="col-md-12 mt-lg-4 mt-4">
								<!-- Page Heading -->
								<div class="d-sm-flex align-items-center justify-content-between mb-4">
									<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
									<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-download" style="font-size:16px"></i>
										Generate Report</a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="row">
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">

												<h5 class="card-title mb-4">Pesediaan Barang</h5>
												<h1 class="display-5 mt-1 mb-3"><?php
																				echo $jumlah_data2;
																				?>
													data</h1>
												<!-- <div class="mb-1">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
													<span class="text-muted">Since last week</span>
												</div> -->
											</div>
										</div>

									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Customer</h5>
												<h1 class="display-5 mt-1 mb-3"><?php
																				echo $jumlah_data3;
																				?> data</h1>
											</div>
										</div>

									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Supplier</h5>
												<h1 class="display-5 mt-1 mb-3"><?php
																				echo $jumlah_data4;
																				?> data</h1>
											</div>
										</div>

									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Karyawan</h5>
												<h1 class="display-5 mt-1 mb-3"><?php
																				echo $jumlah_data5;
																				?> data </h1>
											</div>
										</div>

									</div>


								</div>
							</div>



							<!-- column -->


							<!-- /.container-fluid -->

						</div>








						<footer class="footer">
							<div class="container-fluid">
								<div class="row text-muted">
									<div class="col-6 text-left">
										<p class="mb-0">
											<a href="index.html" class="text-muted"><strong>2021 E-TPS </strong></a> &copy
										</p>
									</div>
									<div class="col-6 text-right">
										<ul class="list-inline">
											<li class="footer-item">
												<a class="text-muted" href="#">Support</a>
											</li>
											<li class="footer-item">
												<a class="text-muted" href="#">Help Center</a>
											</li>
											<li class="footer-item">
												<a class="text-muted" href="#">Privacy</a>
											</li>
											<li class="footer-item">
												<a class="text-muted" href="#">Terms</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</footer>

					</div>
				</div>
				<!-- /#page-content-wrapper -->

			</div>
			<!-- /#wrapper -->





			<!-- Optional JavaScript -->
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

			<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


			<script>
				$('#bar').click(function() {
					$(this).toggleClass('open');
					$('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled');

				});
			</script>






</body>

</html>