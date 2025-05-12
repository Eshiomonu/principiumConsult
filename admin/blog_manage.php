<?php
session_start();
include '../includes/db.php';
if (!isset($_SESSION['admin'])) header('Location: login.php');

// Handle deletion
if (isset($_GET['delete'])) {
  $id = intval($_GET['delete']);
  mysqli_query($conn, "DELETE FROM blog_posts WHERE id=$id");
  header("Location: blog_manage.php");
}

// Fetch posts
$posts = mysqli_query($conn, "SELECT * FROM blog_posts ORDER BY created_at DESC");
?>
<h2>Manage Blog Posts</h2>
<a href="add_blog.php">Add New Blog</a>
<table border="1" cellpadding="10">
  <tr>
    <th>Title</th>
    <th>Created</th>
    <th>Actions</th>
  </tr>
  <?php while ($post = mysqli_fetch_assoc($posts)): ?>
    <tr>
      <td><?= htmlspecialchars($post['title']) ?></td>
      <td><?= $post['created_at'] ?></td>
      <td>
        <a href="edit_blog.php?id=<?= $post['id'] ?>">Edit</a> |
        <a href="?delete=<?= $post['id'] ?>" onclick="return confirm('Delete this post?')">Delete</a>
      </td>
    </tr>
  <?php endwhile; ?>
</table>