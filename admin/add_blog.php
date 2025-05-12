<?php
session_start();
include '../includes/db.php';
if (!isset($_SESSION['admin'])) header('Location: login.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $content = mysqli_real_escape_string($conn, $_POST['content']);
  $image = '';

  if ($_FILES['image']['name']) {
    $image = basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/blogs/$image");
  }

  $sql = "INSERT INTO blog_posts (title, content, image) VALUES ('$title', '$content', '$image')";
  mysqli_query($conn, $sql);
  header('Location: blog_manage.php');
}
?>
<h2>Add New Blog Post</h2>
<form method="POST" enctype="multipart/form-data">
  <input type="text" name="title" placeholder="Title" required><br>
  <textarea name="content" placeholder="Content" rows="6" required></textarea><br>
  <input type="file" name="image"><br>
  <button type="submit">Add Post</button>
</form>