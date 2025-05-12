<?php
session_start();
include '../includes/db.php';
if (!isset($_SESSION['admin'])) header('Location: login.php');

if (isset($_GET['delete'])) {
  $id = intval($_GET['delete']);
  mysqli_query($conn, "DELETE FROM courses WHERE id=$id");
  header("Location: course_manage.php");
}

$courses = mysqli_query($conn, "SELECT * FROM courses");
?>
<h2>Manage Courses</h2>
<a href="add_course.php">Add Course</a>
<table border="1" cellpadding="10">
  <tr>
    <th>Title</th>
    <th>Fee</th>
    <th>Duration</th>
    <th>Actions</th>
  </tr>
  <?php while ($course = mysqli_fetch_assoc($courses)): ?>
    <tr>
      <td><?= $course['title'] ?></td>
      <td>₦<?= number_format($course['fee']) ?></td>
      <td><?= $course['duration'] ?></td>
      <td>
        <a href="edit_course.php?id=<?= $course['id'] ?>">Edit</a> |
        <a href="?delete=<?= $course['id'] ?>" onclick="return confirm('Delete this course?')">Delete</a>
      </td>
    </tr>
  <?php endwhile; ?>
</table>