<!DOCTYPE html>
<html>
<head>
	<title>daftar customer</title>

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
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url ('index.php/WEB/index')?>" style="color: white;" >Lihat customer</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url ('index.php/WEB/index2')?>">Lihat pegawai</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('index.php/JASAPEMESANANTABEL');?>">Lihat data pembayaran</a>
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
		<table class="table table-bordered" id="mytable">
			<thead>
				<tr>
					<th class="text-center" scope="col">NAMA</th>
					<th class="text-center" scope="col">DATE OF BIRTH</th>
					<th class="text-center" scope="col">EMAIL</th>
					<th class="text-center" scope="col">USERNAME</th>
				</tr>
			</thead>
			<tbody>
				<tr><?php foreach ($customer as $cus) : ?>
				<td class="text-center"><?= $cus->Nama; ?></td>
				<td class="text-center"><?= $cus->Date; ?></td>
				<td class="text-center"><?= $cus->Email; ?></td>
				<td class="text-center"><?= $cus->Username; ?></td>
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