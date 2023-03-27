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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-PasX5oBPHx0dW8rHJl7pKy5GvDYgJZL8YYf0M04OeU9vRvRfW/v0Y6UwQM6OJvZQurL6U3cN+7C1N9NQ2e3P3A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    border-bottom: 2px solid #000;
    margin-top: 20px;


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

  .card-img-custom {
    height: 235px;
    /* atur tinggi gambar sesuai kebutuhan */
    width: auto;
    /* atur lebar gambar otomatis agar gambar tidak terlalu besar */
  }

  .float-start {
    float: left;
    /* pindahkan gambar ke sebelah kiri */
    margin-right: 10px;
    /* tambahkan margin kanan agar teks tidak menempel pada gambar */
  }
  </style>
</head>

<body>

  <!-- INI NAVBAR SELAMAT DATANG -->
  <?php include 'nav_welcome.php' ?>
  <!-- <!-INI AKHIR NAVBAR SELAMAT DATANG !-->

  <!-- AWAL BAWAH NAVBAR -->
  <?php include 'navbar.php' ?>
  <div class="carousel-container ">


    <?php
    include __DIR__ . '/../template_admin/admin/config/koneksi.php';

    if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $sql = "SELECT * FROM tbl_berita WHERE id = $id";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    ?>

    <div class="container mt-5">
      <div class="row">
        <div class="col-xs-12">
          <h2><?php echo $row['judul']; ?></h2>
          <hr>
          <img src="../template_admin/admin/berita/img_berita/<?php echo $row['foto_berita']; ?>"
            class="card-img-top card-img-custom float-start" alt="...">

          <p><?php echo $row['isi_berita']; ?></p>
        </div>
        <?php
      } else {
        echo "Berita tidak tersedia.";
      }
    } else {
      echo "Id Berita tidak ditemukan.";
    } ?>
      </div>
    </div>
  </div>
  </ <!-- footer -->
  <?php include 'footer.php' ?>



  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>


</body>

</html>