<?php include 'includes/db.php';
include 'includes/header.php'; ?>
<div class="container py-5">
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
<?php include 'includes/footer.php'; ?>