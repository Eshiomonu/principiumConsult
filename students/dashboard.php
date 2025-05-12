<?php
session_start();
if (!isset($_SESSION['student'])) {
  header('Location: login');
  exit;
}
include 'includes/header.php';
?>
<div class="container py-5">
  <h2>Welcome Student!</h2>
  <p>This is your dashboard. Future: view enrolled courses, certificates, updates.</p>
</div>
<?php include 'includes/footer.php'; ?>