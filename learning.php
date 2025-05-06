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
        <h2 style="color: whitesmoke;margin-top:20px;">Our Courses</h2>
      </div>
    </section><!-- End Section Title -->
    <div class="container mt-4 p-4">
      <div class="row gy-4">
        <?php while ($course = $courses->fetch_assoc()): ?>

          <div class="card" class="col-xl-4 col-md-3 col-6 client-logo">
            <img src="images/<?= $course['image'] ?>" alt="<?= $course['title'] ?>">
            <h3><?= $course['title'] ?></h3>
            <p><?= substr($course['description'], 0, 100) ?>...</p>
            <p><strong>₦<?= number_format($course['cost']) ?></strong></p>
            <p><strong>Start Date: <?= $course['start'] ?></strong></p>
            <a class="cta-btn" href="course.php?id=<?= $course['id'] ?>">View Details</a>
          </div>

        <?php endwhile; ?>
      </div>
    </div>

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