<?php
session_start();
include '../includes/db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM admins WHERE username='$username' AND password=MD5('$password')";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) == 1) {
    $_SESSION['admin'] = $username;
    header('Location: dashboard.php');
  } else {
    $error = "Invalid credentials";
  }
}
?>
<form method="POST">
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <button type="submit">Login</button>
  <?php if (isset($error)) echo "<p>$error</p>"; ?>
</form>