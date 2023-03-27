<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- jQuery library -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- slick slider -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- plugin untuk mengatur video pada slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.4.2/jquery.mb.YTPlayer.min.js"></script>
  <style>
    body {
      margin: 0;
      padding: 0;
      padding-right: 0;
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
      padding: 20px 0;

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

  <!-- AWAL Carousel  -->

  <?php include 'carousel.php' ?>

  <!-- beirta -->
  <?php include 'berita.php' ?>
  <!-- Pengumuman -->
  <?php include 'pengumuman.php' ?>

  <!-- Agenda -->
  <?php include 'agenda.php' ?>

  <!-- footer -->
  <?php include 'footer.php' ?>




  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>


</body>

</html>