<?php
include "header2.php";
?>

    <!-- awalan untuk edit -->
        <?php
        include "../koneksi.php";

        if(isset($_POST['edit'])) {
            $id = $_GET['id'];
        }

        $query = mysqli_query($conn, "SELECT * FROM data_siswa WHERE id = '$id'");
        $data = mysqli_fetch_array($query);
        ?>

    <div class="container mt-5">
    <form action="t_edit.php" method="POST" class="border shadow form-md bg-dark" enctype="multipart/form-data">
        <h3 class="text-center">Form Edit</h3>
        <hr>
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        <input type="hidden" name="foto_lama" value="<?php echo $data['foto'] ?>">
      <div class="mb-3">
          <label class="form-label">NIS</label>
          <input type="text" class="form-control" name="nis" value="<?php echo $data['nis'] ?>">
        </div>
      <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
        </div>
      <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email" value="<?php echo $data['email'] ?>">
        </div>
      <div class="mb-3">
          <label class="form-label">Kelas</label>
          <input type="text" class="form-control" name="kelas" value="<?php echo $data['kelas'] ?>">
        </div>
      <div class="mb-3">
          <label class="form-label">Alamat</label>
          <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat'] ?>">
        </div>
      <div class="mb-3">
          <label class="form-label">Nomer HP yang bisa dihubungi</label>
          <input type="text" class="form-control" name="no_hp" value="<?php echo $data['no_hp'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto" required>
        </div>
        <input type="submit" class="btn btn-primary btn-sm" value="Done" name="submit">
        <input type="reset" class="btn btn-danger btn-sm" value="Reset">
    </form>
    </div>
    <!-- akhiran untuk edit -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?php
    include "footer.php";
    ?>