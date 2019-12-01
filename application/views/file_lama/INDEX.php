<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>welcome page</title>

	
	<link rel="stylesheet" type="text/css" href="./css/welcome.css">
	<link rel="stylesheet" type="text/css" href="./css/section2.css">
	<link rel="stylesheet" type="text/css" href="./css/section3.css">
	<link rel="stylesheet" type="text/css" href="./css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
	<script src="https://code.jquery.com/jquery-3.4.0.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

	<div class="row">
		<nav class="navbar navbar-expand-lg navbar-light warna col-12 fixed-top" id="topnav2">
			<a class="navbar-brand" href="#">
				<!-- navbar branding -->
				<img src="assets/branding.png">
			</a>				

			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#pertama-banget">Home</a> 
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#service">Service</a> 
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about">About</a> 
				</li>
				<div class="btn-group">
					<li class="nav-item" style="cursor: pointer;">
						<a href="<?php echo base_url('index.php/WEB/Register/'); ?>" class="nav-link" id="signup-butt">Signup</a>
					</li>
					<li class="nav-item" style="cursor: pointer;">
						<a href="#login" class="nav-link" id="login-butt">Login</a>
					</li>
				</div>
			</ul>
		</nav>
	</div>
</head>
<body>
	<img class="wallpaper" src="./assets/wallpaper2.png">
	<section id="pertama-banget">
		<div class="row">
			<nav class="navbar navbar-expand-lg navbar-light col-12 fixed-top hid-this">
				<a class="navbar-brand" href="#">
					<!-- navbar branding -->
					<img src="assets/branding.png">
				</a>				

				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#pertama-banget"> Home </a> 
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#service">Service</a> 
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About</a> 
					</li>
					<li class="nav-item" style="cursor: pointer;">
						<a href="<?php echo base_url('index.php/WEB/Register/'); ?>" class="nav-link" id="signup-butt">Signup</a>
					</li>
					<li class="nav-item" style="cursor: pointer;">
						<a href="#login" class="nav-link" data-toggle="modal" data-target="#login-form" id="login-butt">Login</a>
					</li>
				</ul>
			</nav>
		</div>
		<div id="carousel-foto" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-foto" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-foto" data-slide-to="1"></li>
				<li data-target="#carousel-foto" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="assets/salon.jpg" class="d-block w-100 min-vh-100">
				</div>
				<div class="carousel-item">
					<img src="assets/spa.jpg" class="d-block w-100 min-vh-100">
				</div>
				<div class="carousel-item">
					<img src="assets/3.jpg" class="d-block w-100 min-vh-100">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carousel-foto" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carousel-foto" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<!-- buat login nya -->
		<!-- begin of login -->
		<div class="modal fade" id="login-form" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content" style="border-radius: 25px !important;">
					<div class="container-login">
						<h3>LOGIN</h3>
						<form action="<?php echo base_url('index.php/HOMEPAGE/login_action/');?>" method="POST">
							<div class="form-group">

								<label>username</label>
								<input id="uname" class="input-uname" placeholder="username" name="uname-input" type="text" required>

								<label>password</label>						
								<input id="pass" class="input-pass" placeholder="password" name="pass-input" type="password" required>

								<button type="submit" class="btn btn-primary tombollogin">Login</button>
								<a class="forgotpass"  href="#forgot">Forgot Password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end of login --> 
</section>

<section id="service">
	<h1>Our Services</h1>
	<div class="row container list-jasa">
		<div class="container col-4">
			<ul>
				<li id="li1">
					Nail Art
					<span style="margin-left: 50%;">Rp.200.000,-</span>
				</li>
				<li id="li2">
					Creambath
					<span style="margin-left: 43%;">Rp.100.000,-</span>
				</li>
				<li id="li3">
					Smoothing
					<span style="margin-left: 43%;">Rp.200.000,-</span>
				</li>
				<li id="li4">
					Spa
					<span style="margin-left: 58%;">Rp.300.000,-</span>
				</li>
				<li id="li5">
					Hair Extension
					<span style="margin-left: 35%;">Rp.700.000,-</span>
				</li>
				<li id="li6">
					Hair Coloring
					<span style="margin-left: 37%;">Rp.800.000,-</span>
				</li>
				<li id="li7">
					Hair Cut
					<span style="margin-left: 47%;">Rp.150.000,-</span>
				</li>
			</ul>
		</div>
		<div class="container col-6">
			<div class="container" id="conimg">
					<img src="assets/services/nail.jpg" height="100%" width="100%" id="nail">
			</div>
		</div>
	</div>
</section>

	<!--		</div>-->
	<!--	</div>-->
	<!--</section>-->

	<section id="about">

		<h1 style="text-align: center;position: relative;top: -10px; font-size: 50px;">About us</h1>	
				<h1 style="position: relative;top: 35%; text-align: center;font-size: 19px"><strong>Contact Us</strong></h1>
					<p style="position: relative;top: 37%; font-size: 17px; text-align: center;"><strong>Email:</strong><a href="mailto: saloncitra@xxx.com"> saloncitra@xxx.com   | </a><strong>Phone:</strong> 08512345678</p>
					<p style="text-align: center;position: relative;bottom: 13%; font-size: 20px; font-family: Lucida Calligraphy; ">Salon Kami Adalah Salon Terpercaya Yang Karyawannya Ramah-Ramah. <br>Bagi anda yang memimpikan menjadi seorang princess, silahkan datang dan coba pelayanan dari salon kami. <br>Harga yang kami tawarkan sangat terjangkau untuk semua kalangan dan hasilnya tidak akan mengecewakan anda.</p>
					<p style="text-align: center;position: relative;bottom: -110px; color: white;">Copyright © 2019 saloncitraofficial@gmail.com All Rights Reserved</p>

	</section>
	<script type="text/javascript">
		 // auto-appear navbar on-scroll

		 document.getElementById("topnav2").style.top = "-1000px";
		// When the user scrolls down 20px from the top of the document, slide down the navbar
		window.onscroll = function() {scrollFunction()};
		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("topnav2").style.top = "0";
			} else {
				document.getElementById("topnav2").style.top = "-1000px";
			}
		}

		/*smooth scrolling page*/
		$(document).ready(function(){
			$(".nav-link").on('click', function(event) {

				if (this.hash !== "") {
					event.preventDefault();
					var hash = this.hash;
					$('html, body, section').animate({
						scrollTop: $(hash).offset().top
					}, 800, function(){
						window.location.hash = hash;
					});
				}
			});
		});

		$("#li1").hover(function(){ 
		      	$("#nail").css("visibility","visible");
			});
		$("#li2").hover(function(){   
		        $("#nail").css("visibility","hidden");
				$("#conimg").css({"background-image":"url('<?php echo base_url();?>/assets/services/cream1.jpg')","height":"100%","width":"100%"});
			});	
		$("#li3").hover(function(){  
		        $("#nail").css("visibility","hidden");
				$("#conimg").css({"background-image":"url('<?php echo base_url();?>/assets/services/smoothing.jpg')","height":"100%","width":"100%"});
			});	
		$("#li4").hover(function(){   
		        $("#nail").css("visibility","hidden");
				$("#conimg").css({"background-image":"url('<?php echo base_url();?>/assets/services/spa4.jpeg')","height":"100%","width":"100%"});
			});	
		$("#li5").hover(function(){   
		        $("#nail").css("visibility","hidden");
				$("#conimg").css({"background-image":"url('<?php echo base_url();?>/assets/services/ext7.jpg')","height":"100%","width":"100%"});
			});	
		$("#li6").hover(function(){  
		        $("#nail").css("visibility","hidden");
				$("#conimg").css({"background-image":"url('<?php echo base_url();?>/assets/services/ombre.jpg')","height":"100%","width":"100%"});
			});	
		$("#li7").hover(function(){ 
		        $("#nail").css("visibility","hidden");
				$("#conimg").css({"background-image":"url('<?php echo base_url();?>/assets/services/cut.jpg')","height":"100%","width":"100%"});
			});						
	</script>
</body>
</html>