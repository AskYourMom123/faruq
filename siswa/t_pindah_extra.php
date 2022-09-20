<?php 
    include "../koneksi.php";
    
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $extra = $_POST['extra'];

    }
    $query = mysqli_query($conn, "UPDATE data_siswa SET extra='$extra' WHERE id='$id'");
    
    if($query) {
        ?>
        <script>
            alert ("Berhasil Pindah");
            document.location = "logout.php";
        </script>
        <?php
    } else {
        ?>
        <script>
            alert ("Gagal Pindah");
        </script>
        <?php
    }
?>