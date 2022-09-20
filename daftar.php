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

    <!-- style sendiri -->
    <style>
        /* untuk ketinggian scroll */
        body {
            min-height: 900px;
        }
        /* untuk lebar form */
        form {
            width: 30%;
            margin: auto;
        }
    </style>

    <title>Register XApps</title>
  </head>
  <body class="bg-secondary">
      <h1 class="text-center mt-3 mb-2"><b>XApps</b></h1>
      
      <form action="t_daftar.php" method="POST" class="border shadow form-md bg-dark" enctype="multipart/form-data">
        <h3 class="text-center">Form Daftar</h3>
        <p class="text-center">Daftarkan diri Anda</p>
        <hr>
      <div class="mb-3">
          <label class="form-label">NIS</label>
          <input type="text" class="form-control" name="nis" required>
        </div>
      <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" required>
        </div>
      <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email" required>
        </div>
      <div class="mb-3">
          <label class="form-label">Kelas</label>
          <input type="text" class="form-control" name="kelas" required>
        </div>
      <div class="mb-3">
          <label class="form-label">Alamat</label>
          <input type="text" class="form-control" name="alamat" required>
        </div>
      <div class="mb-3">
          <label class="form-label">Nomer HP yang bisa dihubungi</label>
          <input type="text" class="form-control" name="no_hp" required>
        </div>
      <div class="mb-3">
        <label class="form-label">Ekstra</label>
          <select name="extra" class="text-center form-control" required>
            <option> -- Pilih Ekstra -- </option>
            <?php
              include "koneksi.php";

              $query = mysqli_query($conn, "SELECT * FROM jenis_extra");
              $no=0;
              while($data = mysqli_fetch_array($query)) {
              $no++
            ?>

            <option value="<?php echo $data['nama_extra']; ?>"> <?php echo $data['nama_extra']; ?> </option>

            <?php
              }
            ?>
          </select>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto" required>
        </div>
        <p>Sudah punya akun? <a href="login.php">Login</a></p>
        <input type="submit" class="btn btn-primary btn-sm" value="Submit" name="submit">
        <input type="reset" class="btn btn-danger btn-sm" value="Reset">
    </form>
    <br>
    <br>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>