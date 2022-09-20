
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
                    <a class="nav-link me-3" href="#presensi"><i class="bi bi-journal-check"></i> Present</a>
                    <a class="nav-link me-3" href="extra.php"><i class="bi bi-box-arrow-right"></i> Exit</a>
                </div>
            </div>
        </div>
    </nav>

    <br>
    <!-- untuk background transparan -->
    <div class="container mb-5" style="background-color:rgba(255, 255, 255, 0.411); border-radius: 5px; border: 2px solid #cfcba3; width: 95%; margin: auto;">
        <?php
        include "../koneksi.php";

        if(isset($_GET['id'])) {
            $id = $_GET['id'];

            $query = mysqli_query($conn, "SELECT * FROM materi_extra WHERE id='$id'");
            $data = mysqli_fetch_array($query);
        }
        ?>

        <!-- untuk awalan home -->
        <section class="header mt-2" id="home">
            <h3 class="text-center"><?php echo $data['judul_materi'] ?></h3>
            <hr>
            <p style="text-decoration: underline;"> Materi Tanggal : <?php echo $data['tanggal'] ?></p>
            <p><?php echo $data['desk_materi'] ?></p>
        </section>
        <!-- untuk akhiran home -->
        

    </div>
        <!-- akhiran background transparan -->

        <div class="container">
            <div class="row">


                <div class="col-md-4">

                     <!-- untuk awalan presensi -->
    <section id="presensi">
            <form action="" method="POST" enctype=multipart/form-data ">
            <div class="col-md-12 mb-3">
                <div class="shadow">
                    <p class="card-header text-start bg-dark text-light">Form Presensi</p>
                        <div class="card-body bg-light">
                            <p class="form-label">Presensi Kehadiran</p>
                        <select name="presensi" class="form-control text-center" required>
                            <option value="hadir">HADIR</option>
                            <option value="ijin">IJIN</option>
                            <option value="sakit">SAKIT</option>
                        </select>
                        <p class="form-label">Keterangan</p>
                        <input type="text" name="ket" class="form-control" value="-">
                        <p class="form-label">Bukti</p>
                        <input type="file" name="foto" class="form-control mb-3" required>
                        <input type="submit" class="btn btn-primary btn-sm" value="Submit" name="submit">
                </div>    
            </div>
            </div>
            <?php
            include "../koneksi.php";

            if(isset($_POST['submit'])) {
                $extra = htmlspecialchars($_SESSION['extra']);
                $nama = htmlspecialchars($_SESSION['nama']);
                $nis = htmlspecialchars($_SESSION['nis']);
                $data = htmlspecialchars($data['tanggal']);
                $presensi = htmlspecialchars($_POST['presensi']);
                $ket = htmlspecialchars($_POST['ket']);
                $foto = $_FILES['foto']['name'];

                $tmpFoto = $_FILES['foto']['tmp_name'];

                $namaFoto = $nama . '-' . $foto . '-' . $data;

                $lokasiFoto = '../assets/img/bukti_presensi/';

                $prosesUpload = move_uploaded_file($tmpFoto, $lokasiFoto . $namaFoto);
                
                if($prosesUpload) {
            $insert = mysqli_query($conn, "INSERT INTO presensi_siswa (nama_extra, nama_siswa, nis, tanggal ,presensi, ket, bukti ) VALUES ('$extra','$nama','$nis', '$data', '$presensi','$ket','$namaFoto')");
                ?>
                    <script>
                        alert("Berhasil Ditambahkan");
                    </script>
                <?php
                }
            }

            ?> 
            </form>
        </section>
        <!-- untuk akhiran presensi -->



                </div>



                <div class="col-md-8">
                      <!-- untuk awalan kolom presensi -->
        <section class="presensi">
        <div class="col-md-12 mb-3">
                <div class="shadow">
                    <p class="card-header text-start bg-dark text-light">Daftar Presensi</p>
                        <div class="card-body bg-light">
                        <?php
                        include "../koneksi.php";
                        if(isset($_GET['id'])) {
                            $id = $_GET['id'];
                
                            $query1 = mysqli_query($conn, "SELECT * FROM materi_extra WHERE id='$id'");
                            $data = mysqli_fetch_array($query1);
                        }

                        $query = mysqli_query($conn, "SELECT * FROM presensi_siswa WHERE tanggal = '$data[tanggal]' ORDER BY id DESC");
                        $no=0;
                        while($data = mysqli_fetch_array($query)) {
                        $no++
                        ?>
                        <div class="text-center bg-secondary" style="padding:4px; border-radius:4px;">
                        <strong class="text-light"><?php echo $data['nama_siswa']; ?> - <?php echo $data['nis'] ?></strong>
                        </div>
                        <p></p>
                        <p><b>Status : </b> <?php
                        if($data['presensi'] === 'hadir') {
                            echo "<small class='bg-success text-center' style='padding:6px; color:white; border-radius: 3px;'>HADIR</small>";
                        } else if ($data['presensi'] === 'ijin') {
                            echo "<small class='bg-warning text-center' style='padding:6px; border-radius: 3px;'>IJIN</small>";
                        } else {
                            echo "<small class='bg-danger text-center' style='padding:6px; color:white; border-radius: 3px;'>SAKIT</small>";
                        }
                        ?></p>
                        <p><b>Keterangan : </b><?php echo $data['ket'] ?></p>
                        <b>Bukti : </b> <a href="../assets/img/bukti_presensi/<?=$data['bukti']?>" class="btn btn-sm btn-primary">Lihat</a>
                        <hr>
                        <?php
                        }
                        ?>
                </div>    
            </div>
            </div>
        </section>
        <!-- untuk akhiran form presensi -->
                </div>
            </div>
        </div>
       

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php
include "footer.php";
?>