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

<style>
    .jumbotron {
  
      background-image: url(gambar/background.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>

<title>SMA Tentang Rindu </title>
</head>
<body class="mt-5">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                <div class= "container">
                <a class="navbar-brand" href="Home.html">
                   <img src="gambar/Logo.png" width="30px" class="rounded-circle img-thumbnail mr-2" > SMA Tentang Rindu
                </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item mr-3">
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
            <li class="nav-item active mr-3">
              <a class="nav-link" href="datatendik.php">Tenaga Pendidik</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="Login.php">Download</a>
            </li>
          </ul>
          
              
            
        </div>
    </div>
      </nav>

      <!-- LOGO -->
      <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <img src="gambar/Logo.png" width="25%" class="rounded-circle img-thumbnail" >
          <h1 class="display-4"  >SMA Tentang Rindu</h1>
          <p class="lead" >Success, Reputation, Prestige</p>
        </div>
      </div>

      <section id="tendik" class="tendik">
        <div class="container">
              <div class="row">
                  <div class="col text-center mb-4">
                    <h1> Tenaga Pendidik </h1>
                    <div align="center">
                    <?php
                    define('DBHOST', 'localhost');
                    define('DBUSER', 'root');
                    define('DBPASS', '');
                    define('DBNAME', 'bootstrap');
                    $dbconnect = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
                    ?>

                    <table border="3" width="650">
                        <thead>
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Golongan</th>
                                <th>Jabatan</th>
                            </tr>
                        </thead>

                        <tbody>
                    <?php
                        $ambildata=mysqli_query($dbconnect, "SELECT * FROM datatu");
                        while($a=mysqli_fetch_array($ambildata)){
                    ?>
                        <tr>
                            <td><?php echo $a['NIP'];?></td>
                            <td><?php echo $a['NAMA'];?></td>
                            <td><?php echo $a['GOLONGAN'];?></td>
                            <td><?php echo $a['JABATAN'];?></td>
                        </tr>
                    <?php
                        }
                    ?>
                        </tbody>
                    </table>
                    </div>
                    </div>
              </div> 
        </div>
      </section>
     
      <div class="col text-center mb-4">
  <img src="gambar/struktur.png" class="mt-4">
</div>

<footer class="bg-dark text-light mb-4">
  <div class="container">
    <div class="row">
      <div class="col text-center mt-2">
        <p>Copyright © 2018 smarindu.sch.id. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5bf54cfd79ed6453ccaa6b9c/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
  </body>
</html>