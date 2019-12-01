<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/login_pegawai.css');?>">

    <title>Salon Citra</title>
  </head>
  <body>
    
    <div class="container col-lg-4">
      <h2 class="text-center">Selamat Datang</h2>
      <hr>
      <form method="POST" action="<?php echo base_url('/index.php/LOGIN_PEG_CONTROL/login/'); ?>">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="uname" class="form-control" placeholder="Masukkan username">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="pass" class="form-control" placeholder="Masukkan password">
        </div>
        <br>
        <button type="submit" class="btn btn-primary btn-block" href="<?php echo base_url('index.php/WEB/view/');?>">Masuk</button>
      </form>
    </div>
  </body>
</html>