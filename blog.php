<!-- ...existing code remains unchanged... -->

<!-- File: blog.php -->
<?php
include 'includes/db.php';
include 'includes/header.php';
$limit = 5;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$offset = ($page - 1) * $limit;
$result = mysqli_query($conn, "SELECT * FROM blogs ORDER BY created_at DESC LIMIT $offset, $limit");
?>
<div class="container py-5">
    <h2 class="text-center">Our Blog</h2>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <div class="mb-4">
            <h4><a href="blog_post.php?id=<?= $row['id'] ?>"><?= htmlspecialchars($row['title']) ?></a></h4>
            <p><small><?= date('F j, Y', strtotime($row['created_at'])) ?></small></p>
            <p><?= substr(strip_tags($row['content']), 0, 150) ?>...</p>
            <a href="blog_post.php?id=<?= $row['id'] ?>">Read more</a>
        </div>
        <hr>
    <?php endwhile; ?>

    <!-- Pagination -->
    <nav>
        <ul class="pagination">
            <?php
            $total = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM blogs"))['total'];
            $pages = ceil($total / $limit);
            for ($i = 1; $i <= $pages; $i++):
            ?>
                <li class="page-item<?= $i == $page ? ' active' : '' ?>">
                    <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                </li>
            <?php endfor; ?>
        </ul>
    </nav>
</div>
<?php include 'includes/footer.php'; ?>

<!-- File: blog_post.php -->
<?php
include 'includes/db.php';
include 'includes/header.php';
$id = intval($_GET['id']);
$post = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM blogs WHERE id=$id"));
?>
<div class="container py-5">
    <h2><?= htmlspecialchars($post['title']) ?></h2>
    <p><small><?= date('F j, Y', strtotime($post['created_at'])) ?></small></p>
    <?php if (!empty($post['image'])): ?>
        <img src="uploads/blogs/<?= $post['image'] ?>" class="img-fluid mb-3" alt="Blog image">
    <?php endif; ?>
    <div><?= $post['content'] ?></div>
</div>
<?php include 'includes/footer.php'; ?>