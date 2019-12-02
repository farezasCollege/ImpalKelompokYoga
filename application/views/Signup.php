<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<title>Sign Up</title>
	<!-- Favicons -->
	<link href="<?php echo base_url('user/img/favicon.png'); ?>" rel="icon">
	<link href="<?php echo base_url('user/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

	<!-- Bootstrap CSS File -->
	<link href="<?php echo base_url('user/lib/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="<?php echo base_url('user/lib/nivo-slider/css/nivo-slider.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('user/lib/owlcarousel/owl.carousel.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('user/lib/owlcarousel/owl.transitions.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('user/lib/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('user/lib/animate/animate.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('user/lib/venobox/venobox.css'); ?>" rel="stylesheet">

	<!-- Nivo Slider Theme -->
	<link href="<?php echo base_url('user/css/nivo-slider-theme.css'); ?>" rel="stylesheet">

	<!-- Main Stylesheet File -->
	<link href="<?php echo base_url('user/css/style.css'); ?>" rel="stylesheet">

	<!-- Responsive Stylesheet File -->
	<link href="<?php echo base_url('user/css/responsive.css'); ?>" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar-example">
	<div class="container container-form">

		<div id="notif"></div> <!-- ini pake ajax bootstrap alert -->

		<div class="row container2-form">
			<div class="col-md-4 signup-img">
				<!-- picture -->
				<img src="<?php echo base_url('user/img/signup/creambath.jpg') ?>">
			</div>
			<div class="col-md-4 col-signup">
				<div class="row judul">
					<h3>Sign up</h3>
				</div>
				<div class="row">
					<div class="form contact-form">
						<form id="signup-form" method="post" role="form">
							<div class="form-group">
								<input type="text" name="Username" placeholder="Enter username" required>
							</div>
							<div class="form-group">
								<input type="password" id="key" name="pass" placeholder="Enter your password" required>
							</div>
							<div class="form-group">
								<input type="password" id="re-key" name="re-pass" placeholder="Re-enter your password" required>
								<div id="pass-match"></div>
							</div>
							<div class="form-group">
								<input type="text" name="nama" placeholder="Enter your name" required>
							</div>
							<div class="form-group">
								<input type="date" name="tgl-lahir" required>
							</div>
							<div class="form-group">
								<input type="email" name="email" placeholder="Enter your email address" required>
							</div>
							<div class="row text-center signup-tombol">
								<div class="col-md-12">
									<button id="daftar-tbl" type="submit">Daftar!!</button>
									<span style="margin-left: 5%; margin-right: 5%;">or</span>
									<span><a href="<?php echo base_url('index.php/LoginUser_controller'); ?>">Login</a></span>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>

	<script src="<?php echo base_url('user/lib/jquery/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('user/lib/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('user/js/pass-validate.js'); ?>"></script>
	<script src="<?php echo base_url('user/js/ajax-signup.js'); ?>"></script>
</body>

</html>