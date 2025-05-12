<?php session_start();
if (!isset($_SESSION['admin'])) header('Location: login.php'); ?>
<h2>Welcome to Admin Dashboard</h2>
<ul>
  <li><a href="blog_manage.php">Manage Blogs</a></li>
  <li><a href="course_manage.php">Manage Courses</a></li>
</ul>
<a href="logout.php">Logout</a>