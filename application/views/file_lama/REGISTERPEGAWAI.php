<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Register Pegawai</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/daftar_customer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

</head>
<body>
    <nav class="col-4">
        <a class="logo" href="#">
            <!-- navbar branding -->
            <img src="<?php echo base_url();?>assets/branding.png">
        </a>

        <div class="row navigation-nav">
            <ul>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url ('index.php/WEB/index')?>">Lihat customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url ('index.php/WEB/index2')?>">Lihat pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('index.php/JASAPEMESANANTABEL');?>">Lihat data pembayaran</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color: white;">Daftarkan pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url ('index.php/LOGIN_PEG_CONTROL')?>">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container col-8">
        <div class="signup-form">
            <h2 class="form-title" align="center" style="margin-bottom: 6%;">Sign up pegawai</h2>
            <form action="<?php echo base_url('/index.php/WEB/RegisterPeg/')?>" method="POST" class="register-form col-8" style="margin-left: 16%;">                       
                <div class="form-group">
                    <input type="text" name="nama" id="name" placeholder="Full name" style="width: 100%; border-radius: 7px;" required/>
                </div>
                <div class="form-group"> 
                    <input type="Date" name="date" id="name" placeholder="Date Of Birth" style="width: 100%; border-radius: 7px;" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'" required/>
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" style="width: 100%; border-radius: 7px;" placeholder="Your Email" required/>
                </div>
                <div class="form-group">
                    <input type="text" name="Username" id="name" style="width: 100%; border-radius: 7px;" placeholder="Username" required/>
                </div>
                <div class="form-group">
                    <input type="password" name="pass" id="pass" style="width: 100%; border-radius: 7px;" placeholder="Password" required/>
                </div>
                <div class="form-group form-button">
                    <input type="submit" name="signup" id="signup" style="background-color:#00848E; width: 100%; border-radius: 7px; color: white;" class="form-submit"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>