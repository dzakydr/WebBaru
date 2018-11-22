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
                      <a class="dropdown-item" href="Basket.html">Basket</a>
                      <a class="dropdown-item" href="EC.html">English Club</a>
                      <a class="dropdown-item" href="Silat.html">Pencak Silat</a>
              <li class="nav-item mr-3">
                <a class="nav-link " href="datatendik.php">Tenaga Pendidik</a>
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

        <div class="outter-form-login">
            <div class="logo-login">
                <em class="glyphicon glyphicon-user"></em>
            </div>
            <form action="send_register.php" class="inner-login" method="post" enctype="multipart/form">
            <h3 class="text-center title-login">Registrasi</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="nickname" placeholder="Nama">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="repassword" placeholder="Re-Password">
                </div>

                <input type="submit" class="btn btn-block btn-custom-green" value="REGISTER" />
                
                <div class="text-center forget">
                    <p>Back To <a href="./Login.php">Login</a></p>
                </div>
            </form>
        </div>
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
</html>