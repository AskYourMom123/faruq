<?php
include "header.php";
?>
<br>
<div class="container">
    <div class="header text-center">
        <h3>BIODATA</h3>
        <hr>
    </div>
    <?php
            include "../koneksi.php";
            $id = $_SESSION['id'];
            $query = mysqli_query($conn, "SELECT * FROM data_siswa WHERE id = '$id'");
            $data=mysqli_fetch_array($query);
            ?>
    <div class="row">
        <!-- awalan foto profile -->
        <div class="col-md-4">
        <img src="../assets/img/profile_siswa/<?php echo $data['foto']; ?>" class="rounded img-thumbnail" alt="foto_profile" style="box-shadow: 3px 3px 5px grey;">
        </div>
        <!-- akhiran untuk foto -->
            
        <!-- awalann profile -->
        <div class="col-md-8  bg-dark shadow" style="border: 1px solid white; border-radius:5px; color: grey; padding: 10px;">
        <p>NIS : <b style="color: white;"><?php echo $data['nis']; ?></b></p>
                <hr>
                <p>Nama : <b style="color: white;"><?php echo $data['nama']; ?></b></p>
                <hr>
                <p>Email : <b style="color: white;"><?php echo $data['email']; ?></b></p>
                <hr>
                <p>Kelas : <b style="color: white;"><?php echo $data['kelas']; ?></b></p>
                <hr>
                <p>Alamat : <b style="color: white;"><?php echo $data['alamat']; ?></b></p>
                <hr>
                <p>Nomer Telfon : <b style="color: white;"><?php echo $data['no_hp']; ?></b></p>
                <hr>
                <p>Extra : <b style="color: white;"><?php echo $data['extra']; ?></b></p>
                <hr>
                <p>Opsi : </p>
                <div class="d-grid gap-2">
                <a href="edit.php?id=<?=$data['id']?>" name="edit" class="btn btn-primary">Edit</a>
                <a href="ganti_password.php?id=<?=$data['id']?>" name="ganti_password" class="btn btn-primary">Ganti Password</a>
                <a href="pindah_extra.php?id=<?=$data['id']?>" name="pindah_extra" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin mengganti extra anda?');">Pindah Extra</a>
        </div>
        <!-- akhiran untuk profile -->
    </div>
</div>

<?php
include "footer.php";
?>