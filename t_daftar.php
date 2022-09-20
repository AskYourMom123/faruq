<?php

include "koneksi.php";

if(isset($_POST['submit'])){
    $nis = htmlspecialchars($_POST['nis']);
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $kelas = htmlspecialchars($_POST['kelas']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $no_hp = htmlspecialchars($_POST['no_hp']);
    $extra = $_POST['extra'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $foto = $_FILES['foto']['name'];

    $tmpFoto = $_FILES['foto']['tmp_name'];

    $namaFoto = $nama . '-' . $foto;

    $lokasiFoto = 'assets/img/profile_siswa/';

    $prosesUpload = move_uploaded_file($tmpFoto, $lokasiFoto . $namaFoto);

    if($prosesUpload) {
        $query1 = mysqli_query($conn, "SELECT nis FROM data_siswa WHERE nis='$nis'");
        $query2 = mysqli_query($conn, "SELECT email FROM data_siswa WHERE email='$email'");
        $cekNis = mysqli_num_rows($query1);
        $cekEmail = mysqli_num_rows($query2);
        if ($cekNis > 0) {
            ?>
                <script>
                    alert ("Upps, NIS sudah digunakan!");
                    document.location="daftar.php";
                </script>
            <?php
        } else if ($cekEmail > 0) {
            ?>
                <script>
                    alert ("Upps, Email sudah digunakan!");
                    document.location="daftar.php";
                </script>
            <?php
        } else {
            $insert = mysqli_query($conn, "INSERT INTO  data_siswa (nis, nama, email, kelas, alamat, no_hp, extra, password, foto) VALUES ('$nis','$nama','$email','$kelas','$alamat','$no_hp','$extra','$password','$namaFoto')");
            if($insert) {
                ?>
                <script>
                    alert ("Berhasil Ditambahkan");
                    document.location="login.php";
                </script>
                <?php
            }
        }
    }

}
?>