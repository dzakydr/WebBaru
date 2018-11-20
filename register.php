<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
      section {
      min-height; 420px }
    </style>


    <title>SMK Tentang Rindu </title>
  </head>
  <body class="mt-5">
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
          <div class= "container">
          <a class="navbar-brand" href="Home.html">
             <img src="Logo.png" width="30px" class="rounded-circle img-thumbnail mr-2" > SMK Tentang Rindu
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-itemmr-3">
                <a class="nav-link" href="Home.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item mr-3">
                <a class="nav-link" href="Profile.html">Profile</a>
              </li>
              <li class="nav-item dropdown mr-3">
                      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ekstrakulikuler</a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="Futsal.html">Futsal</a>
                        <a class="dropdown-item" href="Musik.html">Musik</a>
                        <a class="dropdown-item" href="Pramuka.html">Pramuka</a>
              <li class="nav-item mr-3">
                <a class="nav-link disabled" href="Tendik.html">Tenaga Pendidik</a>
              </li>
            </ul>
            
              
          </div>
      </div>
        </nav>

<div class="container container-body">
        <div class="row pt-4 mb-4">
            <div class="col text-center">
                <h1>REGISTER</h1>
            </div>
        </div>

        <?php
        if($_POST['register']){
          $conn = new mysqli("localhost", "root", "", "bootstrap");
          $nama   = $conn->real_escape_string($_POST['nama']);
          $email  = $conn->real_escape_string($_POST['email']);
          $user   = $conn->real_escape_string($_POST['username']);
          $pass   = $conn->real_escape_string($_POST['password']);
          $pass2  = $conn->real_escape_string($_POST['password2']);
          $tgl    = date("Y-m-d");
          if(strlen($pass) >= 5){
            if($pass == $pass2){
              $password = md5($pass);
              $insert = $conn->query("INSERT INTO user(tgl_daftar, nama, username, password) VALUES('$tgl', '$nama', '$user', '$password')");
              if($insert){
                echo '<div class="alert alert-success">Register berhasil, silahkan <a href="login.php">Login</a>.</div>';
              }else{
                echo '<div class="alert alert-danger">Gagal melakukan Register.</div>';
              }
            }else{
              echo '<div class="alert alert-danger">Konfirmasi password tidak sesuai.</div>';
            }
          }else{
            echo '<div class="alert alert-danger">Password minimal 5 karakter.</div>';
          }
        }
        ?>

        <form class="form-horizontal" method="post">
          <div class="form-group">
            <label class="col-md-4 control-label">Nama Lengkap</label>
              <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" >
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Email</label>
              <input type="email" name="email" class="form-control" placeholder="email@domain.com">
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Username</label>
              <input type="text" name="username" class="form-control" placeholder="username" >
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Password</label>
              <input type="password" name="password" class="form-control" placeholder="password">
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Ulangi Password</label>
              <input type="password" name="password2" class="form-control" placeholder="ulangi password" >
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">&nbsp;</label>
              <input type="submit" name="register" class="btn btn-primary" value="Register">
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">&nbsp;</label>
              Sudah punya akun? <a href="login.php">Login</a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <hr>
  </div>

</section>
<?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning mt-5" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div>
    <?php endif;?>