<?php
session_start();
include '../includes/db.php';
if (!isset($_SESSION['admin'])) header('Location: login.php');

$id = intval($_GET['id']);
$post = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM blog_posts WHERE id=$id"));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $content = mysqli_real_escape_string($conn, $_POST['content']);

  if ($_FILES['image']['name']) {
    $image = basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/blogs/$image");
    $sql = "UPDATE blog_posts SET title='$title', content='$content', image='$image' WHERE id=$id";
  } else {
    $sql = "UPDATE blog_posts SET title='$title', content='$content' WHERE id=$id";
  }

  mysqli_query($conn, $sql);
  header('Location: blog_manage.php');
}
?>
<h2>Edit Blog Post</h2>
<form method="POST" enctype="multipart/form-data">
  <input type="text" name="title" value="<?= htmlspecialchars($post['title']) ?>" required><br>
  <textarea name="content" rows="6" required><?= htmlspecialchars($post['content']) ?></textarea><br>
  <input type="file" name="image"><br>
  <button type="submit">Update Post</button>
</form>