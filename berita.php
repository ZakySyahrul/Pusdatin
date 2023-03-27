<div class="container mt-3">
  <h2>Berita</h2>
</div>

<?php
include __DIR__ . '/../template_admin/admin/config/koneksi.php';
$sql = "SELECT * FROM tbl_berita ORDER BY id DESC LIMIT 3 ";
$result = $conn->query($sql);
?>
<!-- BERITA -->
<div class="container">
  <div class="row">
    <?php while ($row = $result->fetch_assoc()) { ?>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card h-100">
        <a href="isi_berita.php?id=<?php echo $row['id']; ?>">
          <img src="../template_admin/admin/berita/img_berita/<?php echo $row['foto_berita']; ?>" class="card-img-top"
            alt="...">
        </a>
        <div class="card-body">
          <?php if (!empty($row['judul'])) { ?>
          <a href="isi_berita.php?id=<?php echo $row['id']; ?>">
            <h5 class="card-title"><?php echo $row['judul']; ?></h5>
          </a>
          <?php } ?>
          <?php if (!empty($row['isi_berita'])) { ?>
          <p class="mb-1"><a
              href="isi_berita.php?id=<?php echo $row['id']; ?>"><?php echo substr($row['isi_berita'], 0, 100) ?></a>...
          </p>
          <?php } ?>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>


<div class="container mt-3">
  <a href="semua_berita.php" class="btn btn-success ">
    Lihat Berita Lainnya <i class="fa fa-newspaper"></i>
  </a>
</div>