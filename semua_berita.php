<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
      border-bottom: none;



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
  </style>
</head>

<body>

  <!-- INI NAVBAR SELAMAT DATANG -->
  <?php include 'nav_welcome.php' ?>
  <!-- <!-INI AKHIR NAVBAR SELAMAT DATANG !-->

  <!-- AWAL BAWAH NAVBAR -->
  <?php include 'navbar.php' ?>


  <div class="carousel-container ">
    <div class="container mt-3 mb-3">
      <h2>Data Beria</h2>
    </div>



    <?php
    include __DIR__ . '/../template_admin/admin/config/koneksi.php';
    $sql = "SELECT * FROM tbl_berita ORDER BY id ";
    $result = $conn->query($sql);
    ?>
    <!-- BERITA -->

    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-3 ">
        <?php while ($row = $result->fetch_assoc()) { ?>
          <div class="col">
            <div class="card h-100">
              <a href="https://example.com">
                <img src="../template_admin/admin/berita/img_berita/<?php echo $row['foto_berita']; ?>" class="card-img-top  card-img-custom" alt="...">
              </a>
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['judul']; ?></h5>
                <p class="mb-1"><a href="isi_berita.php?id=<?php echo $row['id']; ?>"><?php echo substr($row['isi_berita'], 0, 100) ?></a>...
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Di buat Pada <?php echo $row['create_at']; ?></small>
              </div>

            </div>
          </div>


        <?php } ?>
      </div>
    </div>
  </div>
  <?php include 'footer.php' ?>



  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>


</body>

</html>