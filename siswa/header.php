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
                    <a class="nav-link me-3" aria-current="page" href="index.php"><i class="bi bi-house-fill"></i> Home</a>
                    <a class="nav-link me-3" href="extra.php"><i class="bi bi-trophy-fill"></i> Extra</a>
                    <a class="nav-link me-3" href="nilai.php"><i class="bi bi-bookmarks-fill"></i> Nilai</a>
                    <a class="nav-link me-3" href="profile.php"><i class="bi bi-person-circle"></i> Profile</a>
                    <a class="nav-link me-3" href="logout.php" onclick="return confirm('Apakah Anda yakin ingin keluar dari website ini?');"><i class="bi bi-box-arrow-right"></i> Logout</a>
                </div>
            </div>
        </div>
    </nav>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
