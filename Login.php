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




<section id="login" class="login">
    <div class="container">
        <div class="row pt-4 mb-4">
            <div class="col text-center">
                <h1>LOGIN</h1>
            </div>
        </div>

    <div class="alert alert-danger"> Anda harus login dahulu seblum mendownload materi !!!</div>    
    <div class="outter-form-login">
        <div class="logo-login">
            <em class="glyphicon glyphicon-user"></em>
        </div>
            <form action="check-login.php" class="inner-login" method="post">
          
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                
                <input type="submit" class="btn btn-block btn-custom-green" value="LOGIN" />
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