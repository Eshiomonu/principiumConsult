<?php
session_start();
include '../includes/db.php';
$id = intval($_GET['id']);
$course = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM courses WHERE id=$id"));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $desc = mysqli_real_escape_string($conn, $_POST['description']);
  $fee = floatval($_POST['fee']);
  $duration = mysqli_real_escape_string($conn, $_POST['duration']);
  mysqli_query($conn, "UPDATE courses SET title='$title', description='$desc', fee='$fee', duration='$duration' WHERE id=$id");
  header('Location: course_manage.php');
}
?>
<h2>Edit Course</h2>
<form method="POST">
  <input type="text" name="title" value="<?= $course['title'] ?>" required><br>
  <textarea name="description" required><?= $course['description'] ?></textarea><br>
  <input type="number" step="0.01" name="fee" value="<?= $course['fee'] ?>" required><br>
  <input type="text" name="duration" value="<?= $course['duration'] ?>" required><br>
  <button type="submit">Update</button>
</form>