<?php include('./includes/meta.php') ?>

<body class="index-page">

  <!-- Navigation -->
  <?php include('./includes/nav.php') ?>
  <!-- End Navigation -->

  <main class="main">

    <!-- Title Section -->
    <section class="dark-background">
      <div class="container mt-4 p-4 text-center">
        <h2 style="color: whitesmoke;">CONTACT PAGE</h2>
      </div>
    </section><!-- End Section Title -->






    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container mt-4" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 ">
            <div class="row gy-4">

              <div class="col-lg-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>NO.52, YEDSERAM STREET, MAITIAMA, FCT, NIGERIA </p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+234 8020525959</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@principiumconsults.com</p>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->



    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

      <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/Chiamaka.jpg" class="testimonial-img" alt="Chiamaka O. Elugoba">
                <h3>Chiamaka O. Elugoba</h3>
                <h4>Ceo &amp; Founder of Greenessence</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>As a business owner, I had the privilege of engaging with the leadership of Principium Consult a few years ago, and the experience was nothing short of transformative. I was genuinely impressed by their innovative concepts and practical principles for getting things done.

                    What stood out to me the most was their remarkable ability to add value through the strategic deployment of principles, policies, and ideologies. Their approach is not only insightful but also highly effective in driving change and achieving results.

                    Whether it's transforming a business or positively impacting individual lives, Principium Consult's expertise and commitment to excellence make them an invaluable partner.
                  </span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/store owner.jpg" class="testimonial-img" alt="">
                <h3>Obidinma Roseline Ifeoma</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>As a store owner who has known the leadership of Principium Consult for over a decade, I can confidently say that their passion for transformation and their unwavering commitment to getting things done is truly their calling.

                    For them, it’s not just about meeting expectations—it’s about adding value at all costs. Their dedication, innovative approach, and results-driven mindset set them apart as a transformative force in any endeavor they undertake.

                    Principium Consult doesn’t just deliver solutions; they ignite meaningful change that drives success and growth.
                  </span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/Abdullahi salihu.jpg" class="testimonial-img" alt="">
                <h3>Abdullahi salihu</h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Principium Consult consistently delivers beyond expectations! Their team of experienced and passionate professionals ensures you get exceptional value for your money. If you're looking for reliable and impactful consulting, try them today and experience the difference for yourself.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/Emmanuel E Bassey.jpg" class="testimonial-img" alt="Emmanuel E. Bassy">
                <h3>Emmanuel E. Bassey (Bsc, AcA, ACTI, CCrFA)</h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>As someone with extensive experience in business management, I strongly encourage individuals and organizations aiming for success and sustainability to seek the guidance of Principium Consult Ltd. Their firm specializes in creating comprehensive strategies tailored to foster growth, maximize value, and ensure long-term success. You can allow them to set up everything you need to build a thriving, sustainable business that delivers consistent returns and growth. Partnering with Principium Consult Ltd. is a step toward transforming your vision into reality.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->






    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- ...existing code remains unchanged... -->

    <!-- File: contact.php -->
    <?php include 'includes/header.php'; ?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      include 'includes/db.php';
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $message = mysqli_real_escape_string($conn, $_POST['message']);
      mysqli_query($conn, "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')");
      echo "<div class='alert alert-success'>Message sent successfully.</div>";
    }
    ?>
    <div class="container py-5">
      <h2 class="text-center mb-4">Contact Us</h2>
      <form method="POST">
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
      </form>
    </div>
    <?php include 'includes/footer.php'; ?>

    <!-- Newsletter Signup (Include in footer or homepage) -->
    <form method="POST" class="bg-light p-4 mt-5" style="max-width: 600px; margin: auto;">
      <h5>Subscribe to our Newsletter</h5>
      <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['newsletter_email'])) {
        include 'includes/db.php';
        $email = mysqli_real_escape_string($conn, $_POST['newsletter_email']);
        mysqli_query($conn, "INSERT INTO newsletter (email) VALUES ('$email')");
        echo "<div class='alert alert-success'>Subscribed successfully.</div>";
      }
      ?>
      <div class="input-group">
        <input type="email" name="newsletter_email" class="form-control" placeholder="Enter your email" required>
        <button class="btn btn-success" type="submit">Subscribe</button>
      </div>
    </form>

    <!-- Customer Logos Carousel (Include on homepage) -->
    <div class="container py-5">
      <h3 class="text-center">Trusted By</h3>
      <div id="customerCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-flex justify-content-around">
              <img src="images/client1.png" alt="Client 1" style="height: 80px;">
              <img src="images/client2.png" alt="Client 2" style="height: 80px;">
              <img src="images/client3.png" alt="Client 3" style="height: 80px;">
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-flex justify-content-around">
              <img src="images/client4.png" alt="Client 4" style="height: 80px;">
              <img src="images/client5.png" alt="Client 5" style="height: 80px;">
              <img src="images/client6.png" alt="Client 6" style="height: 80px;">
            </div>
          </div>
        </div>
      </div>
    </div>

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