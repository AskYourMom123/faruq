<?php
session_start();

include "../koneksi.php";

if(!isset($_SESSION["login"])) {
    header("Location: ../login.php");
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

    <!-- link untuk css -->
    <link rel="stylesheet" href="../assets/style/style2.css">

    <!-- link untuk font -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- link untuk icon -->

    <!-- untuk sosmed -->
    <style>
        .sosmed ul {
            display: flex;
            margin-top: 15px;
        }
        .sosmed li {
            list-style: none;
            padding-right: 15px;
        }
        .sosmed a {
            color: black;
            text-decoration: none;
            font-size: 1.1em;
        }
        .sosmed a:hover {
            color: white;
        }
    </style>

    <title>XApps</title>
  </head>
  <body class="bg-secondary">
    <div class="container">
        <div class="sosmed">
            <ul class="float-start">
                <li><a href=""><i class="bi bi-instagram"></i></a></li>
                <li><a href=""><i class="bi bi-facebook"></i></a></li>
                <li><a href=""><i class="bi bi-discord"></i></a></li>
            </ul>
            <ul class="float-end">
                <li>
                    <?php
                        include "../koneksi.php";
                        $id = $_SESSION['id'];
                        $query = mysqli_query($conn, "SELECT * FROM data_siswa WHERE id='$id'");
                        $data = mysqli_fetch_array($query);
                    ?>
                    <b style="cursor:pointer;"><?php echo $data['nama'] ?> - <?php echo $data['nis']?></b>
                </li>
            </ul>
        </div>
    </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow" style="width: 98%; margin: auto; border-radius: 15px; border:2px solid #cfcba3;">
      <div class="container">
          <a class="navbar-brand" href="#"><b>XApps</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link me-3" aria-current="page" href="#home"><i class="bi bi-house-fill"></i> Home</a>
                    <a class="nav-link me-3" href="#achivment"><i class="bi bi-award"></i> Achivment</a>
                    <a class="nav-link me-3" href="#galeri"><i class="bi bi-images"></i> Galery</a>
                    <a class="nav-link me-3" href="#pengampu"><i class="bi bi-person-circle"></i> Coach</a>
                    <a class="nav-link me-3" href="index.php"><i class="bi bi-box-arrow-right"></i> Exit</a>
                </div>
            </div>
        </div>
    </nav>

    <br>
    
    <div class="container mb-5" style="background-color:rgba(255, 255, 255, 0.411); border-radius: 5px; border: 2px solid #cfcba3; width: 95%; margin: auto;">

    <!-- awalan untuk home -->
    <section id="home">
    <?php
    include "../koneksi.php";
    $extra = $_SESSION['extra'];
    $query = mysqli_query($conn, "SELECT * FROM jenis_extra WHERE nama_extra='$extra'");
    $data = mysqli_fetch_array($query);
    ?>
    <div class="header text-center mt-3">
        <h3><?php echo $data['nama_extra'] ?></h3>
    </div>
    <hr>
    <div class="description">
        <p><?php echo $data['desk'] ?></p>
    </div>
    </section>
    <!-- akhiran untuk home -->

    <!-- awalan untuk prestasi -->
    <section id="achivment">
        <h3 class="text-center">Prestasi</h3>
        <hr>
        <table class="table table-hover text-center table-dark table-striped">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Kejuaraan</td>
                    <td>Tanggal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        include "../koneksi.php";
                        $extra = $_SESSION['extra'];
                        $query = mysqli_query($conn, "SELECT * FROM prestasi WHERE nama_extra ='$extra'");
                        $no=0;
                        while($data=mysqli_fetch_array($query)) {
                        $no++
                    ?>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['kejuaraan']?></td>
                    <td><?php echo $data['tanggal']?></td>
                    <?php
                        }
                    ?>
                </tr>
            </tbody>
        </table>
    </section>
    <!-- akhiran untuk prestasi -->


    <!-- awalan untuk galeri -->
    <section id="galeri">
        <h3 class="text-center">Galeri</h3>
        <hr>
        <div class="row">
                    <?php
                        include "../koneksi.php";
                        $extra = $_SESSION['extra'];
                        $query = mysqli_query($conn, "SELECT * FROM galeri WHERE nama_extra ='$extra'");
                        $no=0;
                        while($data=mysqli_fetch_array($query)) {
                        $no++
                    ?>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?php echo $data['desk_foto']; ?></p>
                    </div>
                </div>
            </div>
            <?php
                        }
            ?>
        </div>
    </section>
    <!-- akhiran untuk galeri -->



    <!-- awalan untuk pengampu -->
    <section id="pengampu">
        <h3 class="text-center">Pengampu</h3>
        <hr>
        <?php
        include "../koneksi.php";
        $extra = $_SESSION['extra'];
        $query = mysqli_query($conn, "SELECT * FROM jenis_extra WHERE nama_extra = '$extra'");
        $data = mysqli_fetch_array($query);
        ?>
        <img src="..." class="rounded" alt="...">
        <h6 class="">Pengampu : <?php echo $data['pengampu'] ?></h6>
    </section>
    <!-- akhiran untuk pengampu -->


    <div class="clear" style="clear:both;"></div>
</div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php
include "footer.php";
?>