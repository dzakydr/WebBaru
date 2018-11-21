<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMK Tentang Rindu</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css">
    body {
      padding-top: 70px;
      background: #eeeeee;
    }

    .container-body {
      background: #ffffff;
      box-shadow: 1px 1px 1px #999;
      padding: 20px;
    }
  </style>

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
        <a class="navbar-brand" href="../Home.html">
           SMK Tentang Rindu
          </a>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="upload.php">Upload</a></li>
          <li><a href="download.php">Download</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
			<li><a href="./../logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container container-body">
    <h1>Profile</h1>
    <hr>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <?php
        $sql = $conn->query("SELECT * FROM users WHERE username='{$_SESSION['user']}'");
        $data = $sql->fetch_assoc();
        ?>
        <table class="table">
          <tr>
            <th>USERNAME</th><th>:</th><td><?php echo $data['username']; ?></td>
          </tr>
          <tr>
            <th>TGL. DAFTAR</th><th>:</th><td><?php echo $data['tgl_daftar']; ?></td>
          </tr>
          <tr>
            <th>NAMA LENGKAP</th><th>:</th><td><?php echo $data['nama']; ?></td>
          </tr>     
        </table>
      </div>
    </div>
    <hr>
  </div>

  <footer>
  <div class="container">
    <div class="row">
      <div class="col text-center mt-2">
        <p>SMK Tentang Rindu</p>
      </div>
    </div>
  </div>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>