<?php
session_start();
if (!isset($_SESSION['admin'])) die('Access denied');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!empty($_FILES['media']['name'])) {
    $target_dir = $_POST['type'] === 'image' ? '../uploads/gallery/' : '../uploads/videos/';
    $target_file = $target_dir . basename($_FILES['media']['name']);
    move_uploaded_file($_FILES['media']['tmp_name'], $target_file);
    echo "<p>Uploaded successfully</p>";
  }
}
?>
<h2>Upload Media</h2>
<form method="POST" enctype="multipart/form-data">
  <select name="type">
    <option value="image">Image</option>
    <option value="video">Video</option>
  </select>
  <input type="file" name="media" required>
  <button type="submit">Upload</button>
</form>