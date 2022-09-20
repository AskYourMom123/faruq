<?php
include "header.php";
?>
<div class="container mt-4">
<div class="header text-center">
        <h3>EXTRA</h3>
        <hr>
    </div>
  <div class="row">
    <?php
    include "../koneksi.php";
    $extra = $_SESSION['extra'];
    $query = mysqli_query($conn, "SELECT * FROM materi_extra WHERE nama_extra='$extra' ORDER BY id DESC");
    $no=0;
    while($data = mysqli_fetch_array($query)) {
    $no++
    ?>
    <div class="col-md-4 mb-3">
      <div class="shadow">
        <p class="card-header text-start bg-dark text-light"><?php echo $data['tanggal'] ?></p>
          <div class="card-body bg-light">
            <h5 class="card-title text-center"><?php echo $data['judul_materi'] ?></h5>
              <p class="card-text"><?php echo $data['desk_materi'] ?></p>
            </div>
          <p class="card-footer bg-dark"><a href="detail.php?id=<?=$data['id']?>" class="btn btn-primary btn-sm ">Detail</a></p>     
        </div>
    </div>
    <?php
    }
    ?>
  </div>
</div>
<?php
include "footer.php";
?>