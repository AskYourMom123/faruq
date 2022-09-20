<?php 
    include "../koneksi.php";
    
    if(isset($_POST['submit'])){
        $id = htmlspecialchars($_POST['id']);
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $kelas = htmlspecialchars($_POST['kelas']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $no_hp = htmlspecialchars($_POST['no_hp']);
       
        $foto = $_FILES['foto']['name'];

        $tmpFoto = $_FILES['foto']['tmp_name'];
    
        $namaFoto = $nama . '-' . $foto;
    
        $lokasiFoto = '../assets/img/profile_siswa/';
    
        $prosesUpload = move_uploaded_file($tmpFoto, $lokasiFoto . $namaFoto);

    }

    if($prosesUpload) {
        unlink("../assets/img/profile_siswa".$data['foto']);
    $query = mysqli_query($conn, "UPDATE data_siswa SET id='$id', nama='$nama', email='$email', kelas='$kelas', alamat='$alamat', no_hp='$no_hp', foto='$foto' WHERE id='$id'");
    
    if($query) {
        ?>
        <script>
            alert ("Berhasil Diubah");
            document.location = "profile.php";
        </script>
        <?php
    } else {
        ?>
        <script>
            alert ("Gagal Diubah");
        </script>
        <?php
    }
    }
?>