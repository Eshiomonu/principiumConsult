<?php
include 'includes/db.php';
include 'includes/header.php';

$course_id = intval($_GET['course']);
$course = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM courses WHERE id=$course_id"));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);
  mysqli_query($conn, "INSERT INTO inquiries (name, email, message) VALUES ('$name', '$email', '$message')");
  echo "<p class='alert alert-success'>Thank you for registering. We'll contact you soon.</p>";
}
?>
<div class="container py-5">
  <h2 class="text-center">Register for: <?= htmlspecialchars($course['title']) ?></h2>
  <form method="POST">
    <div class="mb-3">
      <label for="name" class="form-label">Full Name</label>
      <input type="text" class="form-control" name="name" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" required>
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Why do you want to enroll?</label>
      <textarea class="form-control" name="message" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>
<?php include 'includes/footer.php'; ?>