</div>
<div class="container mt-3">
  <h2>Galery Foto & Video</h2>
</div>
<?php
include __DIR__ . '/../template_admin/admin/config/koneksi.php';
$sql = "SELECT * FROM tbl_galeri ORDER BY id DESC LIMIT 6 ";
$result = $conn->query($sql);
?>
<div class="container slider mt-3">
  <?php while ($row = $result->fetch_assoc()) { ?>
    <div>
      <img class="slider-image" data-lazy="../template_admin/admin/galeri/img/<?php echo $row['file_gambar']; ?>" src="https://via.placeholder.com/250x250.png?text=Loading..." alt="...">
    </div>
  <?php } ?>
</div>


<style>
  .slider {
    width: 100%;
    max-width: 1380px;
    margin: 10px;
  }

  .slick-slide {
    margin: 10px;
  }

  @media screen and (max-width: 768px) {
    .slider {
      max-width: 700px;
    }
  }

  @media screen and (max-width: 576px) {
    .slider {
      max-width: 500px;
    }
  }

  .slider img {
    width: 100%;
    height: 250px;
    object-fit: cover;
  }
</style>

<script>
  $(document).ready(function() {
    $('.slider').slick({
      autoplay: true,
      autoplaySpeed: 3000,
      dots: true,
      arrows: false,
      infinite: true,
      speed: 500,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  });
</script>