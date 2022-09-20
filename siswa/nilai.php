<?php
include "header.php";
?>
<br>
<div class="container">
    <div class="header text-center">
        <h3>REKAP NILAI</h3>
        <hr>
    </div>
    <div class="table">
        <table class="table table-hover text-center table-dark table-striped">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Tanggal</td>
                    <td>Materi</td>
                    <td>Nilai</td>
                    <td>Predikat</td>
                </tr>
            </thead>
            <tbody>
                <?php

                include "../koneksi.php";

                $nama = $_SESSION['nama'];

                $query = mysqli_query($conn, "SELECT * FROM nilai WHERE nama_siswa='$nama' ORDER BY id DESC");
                $no=0;
                while($data=mysqli_fetch_array($query)) {
                $no++
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['tanggal'] ?></td>
                    <td><?php echo $data['materi'] ?></td>
                    <td><?php echo $data['nilai'] ?></td>
                    <td><?php 
                    if($data['nilai'] >= 95) { 
                        echo "<p class='bg-success mt-1'>A+</p>"; 
                    } else if ($data['nilai'] >= 90) {
                        echo "<p class='bg-success'>A</p>";
                    } else if ($data['nilai'] >= 85) {
                        echo "<p class='bg-warning'>B+</p>";
                    } else if ($data['nilai'] >=80) {
                        echo "<p class='bg-warning'>B</p>";
                    } else {
                        echo "<p class='bg-danger'>C</p>";
                    }
                        ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include "footer.php";
?>