<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Kode Booking Salon Citra</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	
</head>
<body style="width: 40%; margin-left: 30%; text-align: center;">
	<div class="navbar navbar-expand-lg navbar-light col-12" style="background-color: #63a4ff;	background-image: linear-gradient(315deg, #63a4ff 0%, #83eaf1 74%); width: 70%; border-top-left-radius: 10px; border-top-right-radius: 10px;">
		<a class="navbar-brand" href="<?php echo base_url(); ?>" style="width: 20%; float: left;" >
			<img src="<?php echo base_url(); ?>/assets/branding.png" style="width: 29%; height: 22%; float: left;" >
		</a>				

		<ul class="navbar-nav ml-auto list-unstyled" style=" width: 20%; float: right;">
			<li class="nav-item">
				<p style="margin: 0;padding: 0;" >Salon Citra</p>
			</li>
		</ul>
	</div>
	<div class="message" style="background-color: #63a4ff;	background-image: linear-gradient(315deg, #63a4ff 0%, #83eaf1 74%); width: 70%;">
		<h3>Kode Booking Pelayanan Salon</h3>
		<p>Berikut adalah kode booking anda:</p>
		<span style="font-weight: bold; font-size: 18px;"><?php echo $kode;  ?></span>
		<h5 style="margin-top: 5%;" >Informasi Pemesanan: </h5>
		<span>Tanggal pesan layanan: <?php echo $tgl; ?></span><br>
		<div style="display: block; padding-bottom: 5%;">Waktu pelayanan: <?php echo $jam; ?> </div>
	</div>
	<div style="background-color: #63a4ff;	background-image: linear-gradient(315deg, #63a4ff 0%, #83eaf1 74%); width: 70%; height: 10%; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px">
	
		<p style="text-align: center;">Copyright Salon Citra</p>
		<p style="text-align: center;">For more information, kindly contact us: saloncitra@gmail.com</p>

	</div>
</body>

</html>
