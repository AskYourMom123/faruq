<?php
include "header2.php";
?>

<!-- awlan untuk ganti extra -->
<div class="container">
<form action="t_pindah_extra.php" method="POST" class="mt-5 border shadow form-md bg-dark">
<div class="mb-3">
        <label class="form-label">Pilih Ekstra</label>
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
          <select name="extra" class="text-center form-control" required>
            <?php 
            include "../koneksi.php";
            if(isset($_POST['edit'])){ 
                $id = $_GET['id'];
              }
              $query1 = mysqli_query($conn, "SELECT * FROM data_siswa WHERE id = '$id'");
              $data1 = mysqli_fetch_array($query1);
            ?>

            <option><?php echo $data1['extra'];?></option>
            <?php
              include "../koneksi.php";

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
          <div class="d-grid gap-2 mt-2">
          <input type="submit" name="submit" class="btn btn-primary" value="Done">
            </div>
        </div>
</form>
            </div>
<!-- akhiran untuk ganti extra -->

<?php
include "footer.php";
?>