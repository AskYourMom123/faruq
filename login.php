<?php

session_start();

include "koneksi.php";

if(isset($_SESSION["login"])) {
  header ("Location: siswa/index.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- link css sendiri -->
    <link rel="stylesheet" href="assets/style/style1.css">

    <!-- link untuk font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Dancing+Script&family=Fredoka&family=Lobster&family=Patrick+Hand&family=Peralta&family=Playfair+Display&family=Reggae+One&family=Righteous&family=Roboto+Slab:wght@300&family=Source+Serif+Pro:ital,wght@0,300;1,200&family=Ultra&display=swap" rel="stylesheet">

    <title>Login XApps</title>
  </head>
  <body class="bg-secondary">
      <h1 class="text-center mt-5"><b>XApps</b></h1>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,192L0,256L40,256L40,192L80,192L80,160L120,160L120,224L160,224L160,224L200,224L200,96L240,96L240,224L280,224L280,256L320,256L320,288L360,288L360,224L400,224L400,64L440,64L440,128L480,128L480,288L520,288L520,224L560,224L560,64L600,64L600,224L640,224L640,128L680,128L680,64L720,64L720,64L760,64L760,128L800,128L800,64L840,64L840,128L880,128L880,256L920,256L920,96L960,96L960,256L1000,256L1000,160L1040,160L1040,224L1080,224L1080,256L1120,256L1120,128L1160,128L1160,0L1200,0L1200,128L1240,128L1240,288L1280,288L1280,192L1320,192L1320,160L1360,160L1360,192L1400,192L1400,288L1440,288L1440,320L1400,320L1400,320L1360,320L1360,320L1320,320L1320,320L1280,320L1280,320L1240,320L1240,320L1200,320L1200,320L1160,320L1160,320L1120,320L1120,320L1080,320L1080,320L1040,320L1040,320L1000,320L1000,320L960,320L960,320L920,320L920,320L880,320L880,320L840,320L840,320L800,320L800,320L760,320L760,320L720,320L720,320L680,320L680,320L640,320L640,320L600,320L600,320L560,320L560,320L520,320L520,320L480,320L480,320L440,320L440,320L400,320L400,320L360,320L360,320L320,320L320,320L280,320L280,320L240,320L240,320L200,320L200,320L160,320L160,320L120,320L120,320L80,320L80,320L40,320L40,320L0,320L0,320Z"></path></svg>
      <form action="t_login.php" method="POST" class="position-absolute top-50 start-50 translate-middle bg-dark border shadow">
        <h3 class="text-center">Form Login</h3>
        <p class="text-center">Masukan email dan password Anda</p>
        <hr>
      <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <p>Belum punya akun? <a href="daftar.php">Daftar</a></p>
        <input type="submit" class="btn btn-primary btn-sm" value="login" name="submit">
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>