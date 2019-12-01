<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<title>Login - User</title>
	<!-- Favicons -->
	<link href="<?php echo base_url()user/img/favicon.png; ?>" rel="icon">
	<link href="<?php echo base_url()user/img/apple-touch-icon.png; ?>" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

	<!-- Bootstrap CSS File -->
	<link href="<?php echo base_url()user/lib/bootstrap/css/bootstrap.min.css; ?>" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="<?php echo base_url()user/lib/nivo-slider/css/nivo-slider.css ?>" rel="stylesheet">
	<link href="<?php echo base_url()user/lib/owlcarousel/owl.carousel.css; ?>" rel="stylesheet">
	<link href="<?php echo base_url()user/lib/owlcarousel/owl.transitions.css; ?>" rel="stylesheet">
	<link href="<?php echo base_url()user/lib/font-awesome/css/font-awesome.min.css; ?>" rel="stylesheet">
	<link href="<?php echo base_url()user/lib/animate/animate.min.css; ?>" rel="stylesheet">
	<link href="<?php echo base_url()user/lib/venobox/venobox.css; ?>" rel="stylesheet">

	<!-- Nivo Slider Theme -->
	<link href="<?php echo base_url()user/css/nivo-slider-theme.css; ?>" rel="stylesheet">

	<!-- Main Stylesheet File -->
	<link href="<?php echo base_url()user/css/style.css; ?>" rel="stylesheet">

	<!-- Responsive Stylesheet File -->
	<link href="<?php echo base_url()user/css/responsive.css; ?>" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#navbar-example">
	<div class="container container-form">
		<div class="row container3-form">
			<div class="col-login">
				<div class="row judul">
					<h3>Login</h3>
				</div>
				<div class="row">
					<div class="form contact-form">
						<form action="" method="post" role="form">
							<div class="form-group">
								<input type="text" name="username" placeholder="Enter username" required>
							</div>
							<div class="form-group">
								<input type="password" name="pass" placeholder="Enter your password" required>
							</div>
							<div class="row text-center login-tombol">
								<div class="col-md-12">
									<button type="submit">Masuk!!</button>
								</div>								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
	</div>

	<script src="<?php echo base_url()user/lib/jquery/jquery.min.js; ?>"></script>
	<script src="<?php echo base_url()user/lib/bootstrap/js/bootstrap.min.js; ?>"></script>
	<script src="<?php echo base_url()user/lib/owlcarousel/owl.carousel.min.js; ?>"></script>
	<script src="<?php echo base_url()user/lib/venobox/venobox.min.js; ?>"></script>
	<script src="<?php echo base_url()user/lib/knob/jquery.knob.js; ?>"></script>
	<script src="<?php echo base_url()user/lib/wow/wow.min.js; ?>"></script>
	<script src="<?php echo base_url()user/lib/parallax/parallax.js; ?>"></script>
	<script src="<?php echo base_url()user/lib/easing/easing.min.js; ?>"></script>
	<script src="<?php echo base_url()user/lib/nivo-slider/js/jquery.nivo.slider.js; ?>" type="text/javascript"></script>
	<script src="<?php echo base_url()user/lib/appear/jquery.appear.js; ?>"></script>
	<script src="<?php echo base_url()user/lib/isotope/isotope.pkgd.min.js; ?>"></script>
	<script src="<?php echo base_url()user/js/main.js; ?>"></script>
</body>
</html>