<div class="container mt-3 mb-3">
  <h2>Pengumuman</h2>
</div>

<?php
include __DIR__ . '/../template_admin/admin/config/koneksi.php';
$sql = "SELECT * FROM tbl_pengumuman ORDER BY id DESC LIMIT 6 ";
$result = $conn->query($sql);
?>

<div class="container">
  <div class="row">
    <?php while ($row = $result->fetch_assoc()) { ?>
    <div class="col-md-6 mb-4">
      <div class="card box-shadow h-100">
        <div class="card-body d-flex flex-column justify-content-between">
          <div>
            <p class="card-text"><?php echo $row['create_at']; ?></p>
            <h5 class="card-title"><a
                href="isi_pengumuman.php?id=<?php echo $row['id']; ?>"><?php echo $row['judul']; ?></a></h5>
          </div>
          <div>
            <hr>
            <p class="card-text"><?php echo $row['status']; ?></p>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>

<div class="container mt-3">

  <a href="all_pengumuman.php" class="btn btn-success">
    Lihat Berita Lainnya <i class="fa fa-bullhorn"></i>
  </a>

  </button>