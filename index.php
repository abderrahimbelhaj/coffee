<!DOCTYPE html>
<!-- Coding by CodingNepal - youtube.com/@codingnepal -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coffee Website | CodingNepal</title>
    <!-- Linking Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <!-- Linking Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Header / Navbar -->
    <header>
      <nav class="navbar">
        <a href="#" class="nav-logo">
          <h2 class="logo-text">☕ Coffee</h2>
        </a>

        <ul class="nav-menu">
          <button id="menu-close-button" class="fas fa-times"></button>

          <li class="nav-item">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="menu.php" class="nav-link">Menu</a>
          </li>
          <li class="nav-item">
            <a href="login.php" class="nav-link">Reserve a table</a>
          </li>
        
          <li class="nav-item">
            <a href="login.php" class="nav-link">Log In</a>
          </li>
          
        </ul>

        <button id="menu-open-button" class="fas fa-bars"></button>
      </nav>
    </header>

    <main>
      <!-- Hero section -->
      <section class="hero-section">
        <div class="section-content">
          <div class="hero-details">
            <h2 class="title">Best Coffee</h2>
            <h3 class="subtitle">Make your day great with our special coffee!</h3>
            <p class="description">Welcome to our coffee paradise, where every bean tells a story and every cup sparks joy.</p>

            <div class="buttons">
              <a href="#" class="button order-now">Order Now</a>
              <a href="#contact" class="button contact-us">Contact Us</a>
            </div>
          </div>
          <div class="hero-image-wrapper">
            <img src="images/coffee-hero-section.png" alt="Coffee" class="hero-image" />
          </div>
        </div>
      </section>

      <!-- About section -->
      <section class="about-section" id="about">
        <div class="section-content">
          <div class="about-image-wrapper">
            <img src="images/about-image.jpg" alt="About" class="about-image" />
          </div>
          <div class="about-details">
            <h2 class="section-title">About Us</h2>
            <p class="text">At Coffee House in Berndorf, Germany, we pride ourselves on being a go-to destination for coffee lovers and conversation seekers alike. We're dedicated to providing an exceptional coffee experience in a cozy and inviting atmosphere, where guests can relax, unwind, and enjoy their time in comfort.</p>
            <div class="social-link-list">
              <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
              <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
              <a href="#" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
            </div>
          </div>
        </div>
      </section>

      <!-- Menu section -->
      <section class="menu-section" id="menu">
        <h2 class="section-title">Our Menu</h2>
        <div class="section-content">
          <ul class="menu-list">
            <li class="menu-item">
              <img src="images/hot-beverages.png" alt="Hot Beverages" class="menu-image" />
              <div class="menu-details">
                <h3 class="name">Hot Beverages</h3>
                <p class="text">Wide range of Steaming hot coffee to make you fresh and light.</p>
              </div>
            </li>
            <li class="menu-item">
              <img src="images/cold-beverages.png" alt="Cold Beverages" class="menu-image" />
              <div class="menu-details">
                <h3 class="name">Cold Beverages</h3>
                <p class="text">Creamy and frothy cold coffee to make you cool.</p>
              </div>
            </li>
            <li class="menu-item">
              <img src="images/refreshment.png" alt="Refreshment" class="menu-image" />
              <div class="menu-details">
                <h3 class="name">Refreshment</h3>
                <p class="text">Fruit and icy refreshing drink to make feel refresh.</p>
              </div>
            </li>
            <li class="menu-item">
              <img src="images/special-combo.png" alt="Special Combos" class="menu-image" />
              <div class="menu-details">
                <h3 class="name">Special Combos</h3>
                <p class="text">Your favorite eating and drinking combations.</p>
              </div>
            </li>
            <li class="menu-item">
              <img src="images/desserts.png" alt="Dessert" class="menu-image" />
              <div class="menu-details">
                <h3 class="name">Dessert</h3>
                <p class="text">Satiate your palate and take you on a culinary treat.</p>
              </div>
            </li>
            <li class="menu-item">
              <img src="images/burger-frenchfries.png" alt="burger & French Fries" class="menu-image" />
              <div class="menu-details">
                <h3 class="name">Burger & French Fries</h3>
                <p class="text">Quick bites to satisfy your small size hunger.</p>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <!-- Testimonials section -->
      <section class="testimonials-section" id="testimonials">
        <h2 class="section-title">Testimonials</h2>
        <div class="section-content">
          <div class="slider-container swiper">
            <div class="slider-wrapper">
              <ul class="testimonials-list swiper-wrapper">
                <li class="testimonial swiper-slide">
                  <img src="images/user-1.jpg" alt="User" class="user-image" />
                  <h3 class="name">Sarah Johnson</h3>
                  <i class="feedback">"Loved the French roast. Perfectly balanced and rich. Will order again!"</i>
                </li>
                <li class="testimonial swiper-slide">
                  <img src="images/user-2.jpg" alt="User" class="user-image" />
                  <h3 class="name">James Wilson</h3>
                  <i class="feedback">"Great espresso blend! Smooth and bold flavor. Fast shipping too!"</i>
                </li>
                <li class="testimonial swiper-slide">
                  <img src="images/user-3.jpg" alt="User" class="user-image" />
                  <h3 class="name">Michael Brown</h3>

                  <i class="feedback">"Fantastic mocha flavor. Fresh and aromatic. Quick shipping!"</i>
                </li>
                <li class="testimonial swiper-slide">
                  <img src="images/user-4.jpg" alt="User" class="user-image" />
                  <h3 class="name">Emily Harris</h3>

                  <i class="feedback">"Excellent quality! Fresh beans and quick delivery. Highly recommend."</i>
                </li>
                <li class="testimonial swiper-slide">
                  <img src="images/user-5.jpg" alt="User" class="user-image" />
                  <h3 class="name">Anthony Thompson</h3>

                  <i class="feedback">"Best decaf I've tried! Smooth and flavorful. Arrived promptly."</i>
                </li>
              </ul>

              <div class="swiper-pagination"></div>
              <div class="swiper-slide-button swiper-button-prev"></div>
              <div class="swiper-slide-button swiper-button-next"></div>
            </div>
          </div>
        </div>
      </section>

      <!-- Gallery section -->
      <section class="gallery-section" id="gallery">
        <h2 class="section-title">Gallery</h2>
        <div class="section-content">
          <ul class="gallery-list">
            <li class="gallery-item">
              <img src="images/gallery-1.jpg" alt="Gallery Image" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="images/gallery-2.jpg" alt="Gallery Image" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="images/gallery-3.jpg" alt="Gallery Image" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="images/gallery-4.jpg" alt="Gallery Image" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="images/gallery-5.jpg" alt="Gallery Image" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="images/gallery-6.jpg" alt="Gallery Image" class="gallery-image" />
            </li>
          </ul>
        </div>
      </section>

      <!-- Contact section -->
      <section class="contact-section" id="contact">
        <h2 class="section-title">Contact Us</h2>
        <div class="section-content">
          <ul class="contact-info-list">
            <li class="contact-info">
              <i class="fa-solid fa-location-crosshairs"></i>
              <p>123 Campsite Avenue, Wilderness, CA 98765</p>
            </li>
            <li class="contact-info">
              <i class="fa-regular fa-envelope"></i>
              <p>info@coffeeshopwebsite.com</p>
            </li>
            <li class="contact-info">
              <i class="fa-solid fa-phone"></i>
              <p>(123) 456-78909</p>
            </li>
            <li class="contact-info">
              <i class="fa-regular fa-clock"></i>
              <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
            </li>
            <li class="contact-info">
              <i class="fa-regular fa-clock"></i>
              <p>Saturday: 10:00 AM - 3:00 PM</p>
            </li>
            <li class="contact-info">
              <i class="fa-regular fa-clock"></i>
              <p>Sunday: Closed</p>
            </li>
            <li class="contact-info">
              <i class="fa-solid fa-globe"></i>
              <p>www.codingnepalweb.com</p>
            </li>
          </ul>

          <form action="#" class="contact-form">
            <input type="text" placeholder="Your name" class="form-input" required />
            <input type="email" placeholder="Your email" class="form-input" required />
            <textarea placeholder="Your message" class="form-input" required></textarea>
            <button type="submit" class="button submit-button">Submit</button>
          </form>
        </div>
      </section>

      <!-- Footer section -->
      <footer class="footer-section">
        <div class="section-content">
          <p class="copyright-text">© 2024 Coffee Shop</p>

          <div class="social-link-list">
            <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
          </div>

          <p class="policy-text">
            <a href="#" class="policy-link">Privacy policy</a>
            <span class="separator">•</span>
            <a href="#" class="policy-link">Refund policy</a>
          </p>
        </div>
      </footer>
    </main>

    <!-- Linking Swiper script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Linking custom script -->
    <script src="script.js"></script>
  </body>
</html>