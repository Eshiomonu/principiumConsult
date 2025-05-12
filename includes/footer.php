    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/exclusive_serene_logo.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/Fraser_suites_Logo.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/Hawthorn_Suites_Logo.jpeg.jpg" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/Jaswill.jpg" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/Wells_Carlton_Logo.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/lafred.PNG" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- /Clients Section -->

    <footer id="footer" class="footer dark-background">

      <div class="container footer-top">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6 footer-about">
            <!-- <a href="index.html" class="logo d-flex align-items-center">
        <span class="sitename">Dewi</span>
      </a> -->
            <div class="footer-contact pt-3">
              <h4>Abuja Head Office</h4>
              <p>NO.52, YEDSERAM STREET,</p>
              <p>MAITIAMA, FCT, NIGERIA </p>
              <p class="mt-3"><strong>Phone:</strong> <span>+234-8020525959</span></p>
              <p><strong>Email:</strong> <span>admin@principiumconsults.com</span></p>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-about">

            <div class="footer-contact pt-3">
              <h4>Lagos Head Office</h4>
              <p>NO.15, Orisunbare Road Shasha,</p>
              <p>Alimosho Lagos, NIGERIA </p>
              <p class="mt-3"><strong>Phone:</strong> <span>+234-9045474254</span></p>
              <p><strong>Email:</strong> <span>info@principiumconsults.com</span></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-about">

            <div class="footer-contact pt-3">
              <h4>UK Office</h4>
              <p>39, The Toose Yeovil England, </p>
              <p>United Kingdom. </p>
              <p class="mt-3"><strong>Phone:</strong> <span>+447-721591313</span></p>
              <p><strong>Email:</strong> <span>ukoffice@principiumconsults.com</span></p>
            </div>
            <div class="social-links d-flex mt-4">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-12 footer-newsletter">
            <form method="POST" class="php-email-form">
              <h5>Subscribe to our Newsletter</h5>
              <?php
              if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['newsletter_email'])) {
                include 'includes/db.php';
                $email = mysqli_real_escape_string($conn, $_POST['newsletter_email']);
                mysqli_query($conn, "INSERT INTO newsletter (email) VALUES ('$email')");
                echo "<div class='alert alert-success'>Subscribed successfully.</div>";
              }
              ?>
              <div class="newsletter-form">

                <input type="email" name="newsletter_email" placeholder="Enter your email" required>
                <input type="submit" value="Subscribe">
              </div>
            </form>

          </div>

        </div>
      </div>

      <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Principium Consults</strong> <span>All Rights Reserved</span></p>
      </div>


    </footer>