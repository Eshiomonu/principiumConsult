<?php
include('./includes/meta.php');
include './includes/config.php';

$limit = 5;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$offset = ($page - 1) * $limit;
$result = mysqli_query($conn, "SELECT * FROM blogs ORDER BY created_at DESC LIMIT $offset, $limit");
?>

<body class="index-page">

    <!-- Navigation -->
    <?php include('./includes/nav.php') ?>
    <!-- End Navigation -->

    <main class="main">
        <!-- Title Section -->
        <section class="dark-background">
            <div class="container mt-4 p-4 text-center">
                <h2 style="color: whitesmoke;">Our Blog</h2>
            </div>
        </section><!-- End Section Title -->

        <section class="services section">


            <div class="container" data-aos="fade-up" data-aos-delay="100">

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
        </section>
    </main>

    <!-- Footer section -->

    <?php include('./includes/footer.php') ?>
    <!-- Footer section ends -->


    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- scripts -->
    <?php include('./includes/scripts.php') ?>
</body>

</html>