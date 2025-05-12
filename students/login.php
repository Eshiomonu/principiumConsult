<?php include 'includes/header.php'; ?>
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  include 'includes/db.php';
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $result = mysqli_query($conn, "SELECT * FROM students WHERE email='$email'");
  $user = mysqli_fetch_assoc($result);
  if ($user && password_verify($pass, $user['password'])) {
    $_SESSION['student'] = $user['id'];
    header("Location: dashboard");
    exit;
  } else {
    echo "<div class='alert alert-danger'>Invalid credentials</div>";
  }
}
?>
<div class="container py-5">
  <h2 class="text-center">Student Login</h2>
  <form method="POST" class="mx-auto" style="max-width: 400px;">
    <div class="mb-3">
      <label>Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary w-100">Login</button>
  </form>
</div>
<?php include 'includes/footer.php'; ?>