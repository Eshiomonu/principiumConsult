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
        <h2 style="color: whitesmoke;">Academy Courses</h2>
      </div>
    </section><!-- End Section Title -->

    <section class="services section">


      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2 class="text-center">Academy Courses</h2>
        <div class="row">
          <?php
          $courses = mysqli_query($conn, "SELECT * FROM courses ORDER BY created_at DESC");
          while ($course = mysqli_fetch_assoc($courses)):
          ?>
            <div class="col-md-4 mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><?= htmlspecialchars($course['title']) ?></h5>
                  <p class="card-text"><?= substr(strip_tags($course['description']), 0, 100) ?>...</p>
                  <p><strong>Fee:</strong> ₦<?= number_format($course['fee'], 2) ?></p>
                  <p><strong>Duration:</strong> <?= $course['duration'] ?></p>
                  <a href="register.php?course=<?= $course['id'] ?>" class="btn btn-primary">Enroll</a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
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