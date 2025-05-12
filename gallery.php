<?php include 'includes/header.php'; ?>
<div class="container py-5">
  <h2 class="text-center mb-4">Our Gallery</h2>
  <div class="row">
    <?php
    $gallery = glob("uploads/gallery/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
    foreach ($gallery as $img):
    ?>
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="<?= $img ?>" class="card-img-top" alt="Gallery image">
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<?php include 'includes/footer.php'; ?>