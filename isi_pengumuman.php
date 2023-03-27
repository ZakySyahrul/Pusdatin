<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


  <style>
  body {
    padding-top: 56px;
  }

  .navbarwelcome {
    position: absolute;
    top: 0;
    height: 60px;
    width: 100%;
  }

  .carousel-container {
    border-top: 2px solid #000;

  }

  .carousel-item img {
    width: 100%;
    height: 400px;
    object-fit: cover;
  }

  .row {
    border: none;
  }

  a {
    color: black;
    /* warna hitam */
    text-decoration: none;
    /* menghilangkan underline pada link */
    transition: transform 0.5s ease;
    animation: zoom-out 15s ease forwards;
  }

  a:hover {
    color: #071ff2;

    transition: color 0.65s ease;

  }

  /* .list-inline-item:hover a i {
    transform: scale(1.1);
    transition: all 0.2s ease-in-out;
  } */

  /* .list-unstyled li:hover {
    transform: translateY(-5px);
    transition: all 0.2s ease-in-out;
  } */

  .bg-success.btn-success {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  .bg-success {
    background: linear-gradient(90deg, #44a839 0%, #32c718 100%);
  }

  .btn-success {
    background: linear-gradient(90deg, #44a839 0%, #32c718 100%);
  }

  .card-img-custom {
    height: 235px;
    /* atur tinggi gambar sesuai kebutuhan */
    width: 100%;
  }

  .social-icon {
    display: inline-block;
    width: 42px;
    height: 42px;
    text-align: center;
    line-height: 42px;
    color: #fff;
    font-size: 12px;
    /* border-radius: 10px; */
    transition: all 0.3s ease-in-out;
  }

  .facebook {
    background: #3B5998;
  }

  .facebook:hover {
    transform: scale(1.1);
  }

  .twitter {
    background: #1DA1F2;
  }

  .twitter:hover {
    transform: scale(1.1);
  }

  .instagram {
    background: #E1306C;
  }

  .instagram:hover {
    transform: scale(1.1);
  }

  .whatsapp {
    background: #25D366;
  }

  .whatsapp:hover {
    transform: scale(1.1);
  }

  .hr {
    border: 1px solid black;
    /*membuat border 3 pixel dan warna hitam*/


  }
  </style>
</head>

<body>

  <!-- INI NAVBAR SELAMAT DATANG -->
  <?php include 'nav_welcome.php' ?>
  <!-- <!-INI AKHIR NAVBAR SELAMAT DATANG !-->

  <!-- AWAL BAWAH NAVBAR -->
  <?php include 'navbar.php'?>


  <div class="hr mt-3"></div>
  <?php
include __DIR__ . '/../template_admin/admin/config/koneksi.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = "SELECT * FROM tbl_pengumuman WHERE id = $id";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>

  <div class="container mt-5">
    <div class="row">
      <div class="col-xs-12">
        <h2><?php echo $row['judul']; ?></h2>
        <h4 class="text-center">NOMOR 759/KP.290/A/03/2023</h4>
        <hr>
        <p><?php echo $row['isi_pengumuman']; ?></p>
      </div>
      <?php
          } else {
            echo "Pengumuman tidak ditemukan.";
          }
        } else {
          echo "Id pengumuman tidak ditemukan.";
        }
        ?>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-auto">
        <a href="#" class="social-icon facebook" title="Facebook">
          <i class="fab fa-facebook-f fa-lg"></i>
        </a>
      </div>
      <div class="col-auto">
        <a href="#" class="social-icon twitter" title="Twitter">
          <i class="fab fa-twitter fa-lg"></i>
        </a>
      </div>
      <div class="col-auto">
        <a href="#" class="social-icon instagram" title="Instagram">
          <i class="fab fa-instagram fa-lg"></i>
        </a>
      </div>
      <div class="col-auto">
        <a href="#" class="social-icon whatsapp" title="WhatsApp">
          <i class="fab fa-whatsapp fa-lg"></i>
        </a>
      </div>
    </div>
  </div>
  <hr class="container">
  <!-- berita lainnya -->
  <?php
include __DIR__ . '/../template_admin/admin/config/koneksi.php';

$sql = "SELECT DISTINCT judul, id, isi_pengumuman, create_at FROM tbl_pengumuman WHERE id != $id AND judul NOT IN (SELECT judul FROM tbl_pengumuman WHERE id = $id) ORDER BY id DESC LIMIT 3";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
  <div class="container mt-5 MB-3">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="text-center">Pengumuman Lainnya</h2>
        <hr>
        <div class="list-group">
          <?php
        while ($row = $result->fetch_assoc()) {
        ?>
          <a href="isi_pengumuman.php?id=<?php echo $row['id']; ?>" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1"><?php echo $row['judul']; ?></h5>
              <small><?php echo date('d M Y', strtotime($row['create_at'])); ?></small>
            </div>
            <p class="mb-1"><?php echo substr($row['isi_pengumuman'], 0, 100); ?>...</p>
            <small>Baca selengkapnya</small>
          </a>
          <?php
        } 
      }
    
      ?>
        </div>
      </div>
    </div>
  </div>



  <!-- footer -->
  <?php include 'footer.php' ?>



  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>


</body>

</html>