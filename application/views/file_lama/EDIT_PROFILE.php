<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Edit Profile</title>

	<link rel="stylesheet" type="text/css" href="assets/css/welcome.css">
	<link rel="stylesheet" type="text/css" href="assets/css/section2.css">
	<link rel="stylesheet" type="text/css" href="assets/css/section3.css">


	<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/welcome.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/section2.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/section3.css')?>">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
	<script src="https://code.jquery.com/jquery-3.4.0.js"></script>

</head>
<body>
	<section id="pertama-banget" style="background-color: #E0FFFF;">
		<div class="container-fluid">
			<div class="row">
				<nav class="navbar navbar-expand-lg navbar-light warna col-12 fixed-top" id="topnav2">
					<a class="navbar-brand" href="#">
						<!-- navbar branding -->
						<img src="<?php echo base_url ('assets/img/branding.png')?>">
					</a>				

					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('/index.php/HOMEPAGE/homepage_cust/');?>">Home</a> 
						</li>
						<li class="nav-item" style="cursor: pointer;">
							<a href="<?php echo base_url('index.php/WEB/booking')?>" class="nav-link" id="signup-butt">Booking</a>
						</li>
                        <li class="nav-item dropdown" style="cursor: pointer;">
                            <button type="button" class="btn dropdown-toggle", data-toggle="dropdown">Akun</button>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" ><?php echo $_SESSION['nama'] ?></a>

                                <!-- ini ke controller edit profile -->
                                <a class="dropdown-item" href="<?php echo base_url('/index.php/WEB/ubah/'); ?>">Edit profile</a> 

                                <a class="dropdown-item" href="<?php echo base_url('/index.php/HOMEPAGE/logout/'); ?>">Logout</a>
                            </div>
                        </li>
                    </ul>

                </nav>
            </div>    

            <div class="contaner">
              <div class="row justify-content-md-center">
                <div class="card" style="width: 18rem;position: relative;top:150px">
                   <div class="card-body">
                     <h5 class="card-title" style="text-align: center;">Edit Profile</h5>
                     <form action="<?php echo base_url('/index.php/WEB/ubah/'); ?>" method="POST" class="edit-form" id="edit-form">
                       <div class="row justify-content-md-center">
                           <div class="form-group">
                            <input type="text" name="nama" id="name" placeholder="Full name" value="<?php echo $_SESSION['nama']; ?>" required/>
                        </div>
                        <div class="form-group"> 
                            <label for="date"><i class="zmdi zmdi-calendar-alt" id='datetimepicker1'></i></label>
                            <input type="Date" name="date" id="name" placeholder="Date Of Birth" required/>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email" value="<?php echo $_SESSION['email']; ?>" required/>
                        </div>
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="Username" id="name" placeholder="Username" value="<?php echo $_SESSION['uname']; ?>" readonly />
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="pass" id="pass" placeholder="Password" required/>
                        </div>
                    </div>
                    <div class="form-group form-button row justify-content-md-center" id="updatetmbl">
                       <button type="submit" class="btn btn-info">Update</button>
                   </div>

               </form>
           </div>
       </div>
   </div>
</div>
<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> Update Data Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
</body>