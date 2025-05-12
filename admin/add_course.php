<?php
session_start();
include '../includes/db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $desc = mysqli_real_escape_string($conn, $_POST['description']);
  $fee = floatval($_POST['fee']);
  $duration = mysqli_real_escape_string($conn, $_POST['duration']);
  mysqli_query($conn, "INSERT INTO courses (title, description, fee, duration) VALUES ('$title', '$desc', '$fee', '$duration')");
  header('Location: course_manage.php');
}
?>
<h2>Add Course</h2>
<form method="POST">
  <input type="text" name="title" placeholder="Course Title" required><br>
  <textarea name="description" placeholder="Description" required></textarea><br>
  <input type="number" step="0.01" name="fee" placeholder="Fee" required><br>
  <input type="text" name="duration" placeholder="Duration (e.g. 4 weeks)" required><br>
  <button type="submit">Save</button>
</form>