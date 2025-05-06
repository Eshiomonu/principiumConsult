<?php
$conn = new mysqli("localhost", "root", "", "consults_db");
$courses = $conn->query("SELECT * FROM courses");
?>
<?php
$conn = new mysqli("localhost", "root", "", "consults_db");
$courses = $conn->query("SELECT * FROM courses");
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
        <h2 style="color: whitesmoke;margin-top:20px;">Course Registration</h2>
      </div>
    </section><!-- End Section Title -->
    <div class="container mt-4 p-4">
      <form action="submit_registration.php" method="POST" class="php-email-form">
        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="full_name" class="form-control" placeholder="Full Name" required>
          </div>
          <div class="col-md-6">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="col-md-6">
            <input type="text" name="phone" class="form-control" placeholder="Phone Number" required><br>
          </div>
          <div class="col-md-6">
            <select name="course_id" class="form-control" required>
              <option value="">Select a Course</option>
              <?php while ($c = $courses->fetch_assoc()): ?>
                <option value="<?= $c['id'] ?>"><?= $c['title'] ?></option>
              <?php endwhile; ?>
            </select>
          </div>




          <button class="cta-btn" type="submit">Register</button>
        </div>
      </form>
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