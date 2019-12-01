<!DOCTYPE html>
<html>
<head>
	<title>daftar_pegawai</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/daftar_customer.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
	<script src="https://code.jquery.com/jquery-3.4.0.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

</head>
<body style="background-image: <?php echo base_url();?>assets/service/salon.jpg">
	<nav class="col-4">
		<a class="logo" href="#">
			<!-- navbar branding -->
			<img src="<?php echo base_url();?>assets/branding.png">
		</a>

		<div class="row navigation-nav">
			<ul>
				<li class="nav-item">
					<a class="nav-link cust" href="<?php echo base_url ('index.php/WEB/index')?>">Lihat customer</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url ('index.php/WEB/index2')?>" style="color:white">Lihat pegawai</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url ('index.php/JASAPEMESANANTABEL/getDatabooking')?>">Lihat data pemesanan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url ('index.php/WEB/RegisterPeg')?>">Daftarkan pegawai</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url ('index.php/LOGIN_PEG_CONTROL')?>">Logout</a>
				</li>
			</ul>
		</div>
	</nav>