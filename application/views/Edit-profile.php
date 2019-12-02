<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<title>Edit Profile - Nama user</title>
	<!-- Favicons -->
	<link href="<?php echo base_url('user/img/favicon.png'); ?>" rel="icon">
	<link href="<?php echo base_url('user/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

	<!-- Bootstrap CSS File -->
	<link href="<?php echo base_url('user/lib/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="<?php echo base_url('user/lib/nivo-slider/css/nivo-slider.css'); ?>" rel="stylesheet">
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
				<img src="<?php echo base_url('user/img/signup/creambath.jpg'); ?>">
			</div>
			<div class="col-md-4 col-signup">
				<div class="row judul">
					<h3>Edit Profile</h3>
				</div>
				<div class="row">
					<div class="form contact-form">
						<form id="editProfile-form" method="post" role="form">
							<div class="form-group">
								<input type="text" name="username" placeholder="<?php echo $_SESSION['uname']; ?>">
							</div>
							<div class="form-group">
								<input type="password" name="pass" placeholder="Enter your password" required>
							</div>
							<div class="form-group">
								<input type="password" name="re-pass" placeholder="Re-enter your password" required>
							</div>
							<div class="form-group">
								<input type="text" name="nama" placeholder="Enter your name" value="<?php echo $_SESSION['nama']; ?>" required>
							</div>
							<div class="form-group">
								<input type="date" name="tgl-lahir" required>
							</div>
							<div class="form-group">
								<input type="email" name="email" placeholder="Enter your email address" value="<?php echo $_SESSION['email']; ?>" required>
							</div>
							<div class="row text-center signup-tombol">
								<div class="col-md-12">
									<button type="submit">Edit</button>
									<span style="margin-left: 5%; margin-right: 5%;">or</span>
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
	<script src="<?php echo base_url('user/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
	<script src="<?php echo base_url('user/lib/venobox/venobox.min.js'); ?>"></script>
	<script src="<?php echo base_url('user/lib/knob/jquery.knob.js'); ?>"></script>
	<script src="<?php echo base_url('user/lib/wow/wow.min.js'); ?>"></script>
	<script src="<?php echo base_url('user/lib/parallax/parallax.js'); ?>"></script>
	<script src="<?php echo base_url('user/lib/easing/easing.min.js'); ?>"></script>
	<script src="<?php echo base_url('user/lib/nivo-slider/js/jquery.nivo.slider.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('user/lib/appear/jquery.appear.js'); ?>"></script>
	<script src="<?php echo base_url('user/lib/isotope/isotope.pkgd.min.js'); ?>"></script>
	<script src="<?php echo base_url('user/js/main.js'); ?>"></script>
	<script src="<?php echo base_url('user/js/pass-validate.js'); ?>"></script>
	<script src="<?php echo base_url('user/js/ajax-editProfile.js'); ?>"></script>


</body>

</html>