<!DOCTYPE html>
<html>
<head>
	<title>data pemesanan</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/daftar_customer.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
	<script src="https://code.jquery.com/jquery-3.4.0.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

</head>
<body>
	<nav class="col-4">
		<a class="logo" href="#">
			<!-- navbar branding -->
			<img src="<?php echo base_url();?>assets/branding.png">
		</a>

		<div class="row navigation-nav">
			<ul>
				<li class="nav-item" >
					<a class="nav-link" href="<?php echo base_url ('index.php/WEB/index')?>">Lihat customer</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url ('index.php/WEB/index2')?>">Lihat pegawai</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" style="color:white" href="#">Lihat data Pembayaran</a>
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
	<div class="container content mt-6 col-8">
		<table class=" table table-bordered " id="mytable">
			<thead>
				<tr>
					<!-- Nama, nama_jasa, harga, jam_pelayanan, tanggal_pelayanan -->
					<th class="text-center" scope="col">NAME</th>
					<th class="text-center" scope="col">SERVICE</th>
					<th class="text-center" scope="col">TIME</th>
					<th class="text-center" scope="col">DATE</th>
					<th class="text-center" scope="col">STATUS BAYAR</th>
					<th class="text-center" scope="col">PRICE</th>
				</tr>
			</thead>
			<tbody>
				<tr><?php foreach ($pemesanan as $Pem) : ?>
				<td class="text-center"><?= $Pem->Nama; ?></td>
				<td class="text-center"><?= $Pem->nama_jasa; ?></td>
				<td class="text-center"><?= $Pem->jam_pelayanan; ?></td>
				<td class="text-center"><?= $Pem->tanggal_pelayanan; ?></td>
				<td class="text-center"><?= $Pem->status_bayar; ?>
			</td>
			<td class="text-center"><?= $Pem->harga; ?></td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</div>

<script type="text/javascript"> 
	$(document).ready(function() { 
		$("#mytable").dataTable(); 
	}); 
</script> 

</body>
</html>