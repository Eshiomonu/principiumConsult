<?php
include('./includes/meta.php');
include './includes/config.php';

?>

<body class="index-page">

  <!-- Navigation -->
  <?php include('./includes/nav.php') ?>
  <!-- End Navigation -->

  <main class="main">
    <!-- Title Section -->
    <section class="dark-background">
      <div class="container mt-4 p-4 text-center">
        <h2 style="color: whitesmoke;">Our Gallery</h2>
      </div>
    </section><!-- End Section Title -->

    <section class="services section">


      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2 class="text-center mb-4">Our Gallery</h2>
        <div class="row">
          <?php
          $gallery = glob("uploads/gallery/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
          foreach ($gallery as $img):
          ?>
            <div class="col-md-3 mb-4">
              <div class="card">
                <img src="<?= $img ?>" class="card-img-top" alt="Gallery image">
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer section -->

  <?php include('./includes/footer.php') ?>
  <!-- Footer section ends -->


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- scripts -->
  <?php include('./includes/scripts.php') ?>
</body>

</html>