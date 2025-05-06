<?php
$conn = new mysqli("localhost", "root", "", "consults_db");
$id = $_GET['id'];
$course = $conn->query("SELECT * FROM courses WHERE id=$id")->fetch_assoc();
?>
<?php include('./includes/meta.php') ?>

<body class="index-page">

  <!-- Navigation -->
  <?php include('./includes/nav.php') ?>
  <!-- End Navigation -->

  <main class="main">
    <!-- Title Section -->
    <section class="dark-background">
      <div class="container mt-4 p-4 text-center">
        <h2 style="color: whitesmoke;margin-top:20px;"><?= $course['title'] ?></h2>
      </div>
    </section><!-- End Section Title -->
    <div class="container mt-4 p-4">
      <h1><?= $course['title'] ?></h1>
      <img src="images/<?= $course['image'] ?>" width="400">
      <p><?= $course['description'] ?></p>
      <h3>Curriculum</h3>
      <p><?= nl2br($course['curriculum']) ?></p>
      <p><strong>₦<?= number_format($course['cost']) ?></strong></p>
      <p><strong>Start Date: <?= $course['start'] ?></strong></p>
      <a class="cta-btn" href="register.php">Register Now</a>
    </div>
    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- /Clients Section -->
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