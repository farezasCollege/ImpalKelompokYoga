<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>welcome page</title>

	<link rel="stylesheet" type="text/css" href="./css/welcome.css">
	<link rel="stylesheet" type="text/css" href="./css/section2.css">
	<link rel="stylesheet" type="text/css" href="./css/section3.css">
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
	<script src="https://code.jquery.com/jquery-3.4.0.js"></script>

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
				<li class="nav-item dropdown" style="cursor: pointer;">
					<button type="button" class="btn dropdown-toggle", data-toggle="dropdown">Akun</button>

					<div class="dropdown-menu">
						<a class="dropdown-item" ><?php echo session_data ?></a>
						<a class="dropdown-item" href="<?php echo base_url(); ?>">Edit profile</a>
                        <a class="dropdown-item" href="<?=base_url();?>Web/hapus/<?=$Customer['Username']?>"onclick="return confirm('Apakah anda yakin menghapus data ini?');"?>Delete account</a>
						<a class="dropdown-item" href="<?php base_url(); ?>">Logout</a>
					</div>
				</li>
			</ul>
		</nav>
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
					<li class="nav-item dropdown" style="cursor: pointer;">
						<button type="button" class="btn dropdown-toggle", data-toggle="dropdown">Akun</button>

						<div class="dropdown-menu">
						<a class="dropdown-item" ><?php echo session_data ?></a>
						<a class="dropdown-item" href="<?php echo base_url(); ?>">Edit profile</a>
						<a class="dropdown-item" href="<?php base_url(); ?>">Logout</a>
						</div>
					</li>
				</ul>
			</nav>
	</div>
</head>
<body>
	<img class="wallpaper" src="./assets/wallpaper2.png">
	<section id="pertama-banget">
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
			<div class="modal-content" style="border-radius: 14px !important;">
				<div class="container-login">
					<h3 >LOGIN</h3>
					<form action="" method="POST">
						<div class="form-group">

							<label>username</label>
							<input id="uname" class="input-uname" placeholder="username" name="uname-input" type="text" required>

							<label>password</label>						
							<input id="pass" class="input-pass" placeholder="password" name="pass-input" type="password" required>

							<button type="submit" class="btn btn-primary">Login</button>
							<a href="#forgot">Forgot Password?</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end of login --> 
	<script type="text/javascript">
		$("#login-butt").click(function(){

		});
	</script>
</section>

<section id="service">
	<h1>Our Services</h1>
	<div class="row container list-jasa">
		<div class="container col-4">
			<ul>
				<li>
					Potong rambut
					<span style="margin-left: 40%;">Rp.50.000,-</span>
				</li>
				<li>
					Potong kuku
					<span style="margin-left: 45%;">Rp.20.000,-</span>
				</li>
				<li>
					Potong kambing
					<span style="margin-left: 30%;">Rp.1.050.000,-</span>
				</li>
				<li>
					Potong bebek angsa
					<span style="margin-left: 24%;">Rp.550.000,-</span>
				</li>
			</ul>
		</div>
		<div class="container col-6">

		</div>
	</div>
</section>

<section id="about">
	<h1>About us</h1>
	<div class="row">
		<div class="container">
			<p>haha</p>		
		</div>

	</div>
	<div class="row">
		<div class="container col-4 kontak">
			<h4>Contact us</h4>
			<div class="row email">
				<img class="row" src="">
				<p class="row">saloncitra@xxx.com</p>
			</div>
			<div class="row phone">
				<img class="row" src="">
				<p class="row">08512345678</p>
			</div>
		</div>
		<div class="container col-4 profil-salon">
			<h4>Profil salon</h4>
			<div class="row">
				<p>salon kami adalah salon terpercaya yang karyawannya ramah-ramah. Selain itu, kami juga menawarkan jasa yang endeus abiss</p>
			</div>
		</div>
	</div>
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
	</script>
</body>
</html>