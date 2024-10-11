<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zeny's Pinangat</title>
    @vite(['resources/css/main.css', 'resources/js/main.js'])
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="#" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/logo.png" alt="">
                <h1 class="sitename">Zeny's Pinangat</h1>
            </a>

            <nav id="navmenu" class="navmenu ms-auto">
                <ul class="d-flex aligh-items-center">
                    <li><a href="#" class="active">Home<br></a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted flex-md-shrink-0" href="#">Get Started</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">Handmade, Homegrown, and Full of Love</h1>
                        <p data-aos="fade-up" data-aos-delay="100">“At Zeny’s Pinangat, we bring the rich culinary
                            heritage of Bicol straight to your table. Made from the freshest locally sourced
                            ingredients, each bite of Pinangat is an experience of the authentic taste passed down
                            through generations. Whether you love it spicy, savory, or creamy, our Pinangat will
                            transport you to the heart of Bicol.”</p>
                        <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                            <a href="#about" class="btn-get-started">Get Started <i class="bi bi-arrow-right"></i></a>
                            <a href="https://youtu.be/w9nuxT79b1k"
                                class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0"><i
                                    class="bi bi-play-circle"></i><span>Watch Video</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src="#" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>Who We Are</h3>
                            <h2>A 41-year old street food legacy owned and mastered by the Nocedo Family (started as
                                early 1982).
                            </h2>
                            <p>
                                Zeny’s Pinangat is located at the Province of Albay, Municipality of Camalig. Our
                                product “Pinangat“ is the town’s culinary icon and
                                One Town One Product blue plate, so to speak, it has gained international acceptance,
                                and become an Albayano or Bikolano signature dish gastronomic delight. And make it to
                                the 22nd ranked spot in World Street food Master List

                            </p>
                            <div class="text-center text-lg-start">
                                <a href="#"
                                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- /About Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
                <p>Check the Zeny's Pinangat</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-local">Local</li>
                        <li data-filter=".filter-product">Product</li>
                        <li data-filter=".filter-media">Media and TV Appearances</li>
                        <li data-filter=".filter-awards">Awards and Recognition</li>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-local">
                            <div class="portfolio-content h-100">
                                <img src="#" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Local 1</h4>
                                    <p>PINASarap with Kara David</p>
                                    <a href="#" title="Local 1" data-gallery="portfolio-gallery-local"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="#" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="#" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Product 1</h4>
                                    <p>Classic/Spicy Pinangat</p>
                                    <a href="#" title="Product 1" data-gallery="portfolio-gallery-product"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="#" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-media">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Media 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="#" title="Media 1" data-gallery="portfolio-gallery-branding"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-awards">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Awards 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="#" title="Awards 1" data-gallery="portfolio-gallery-book"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="#" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-local">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Local 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/app-2.jpg" title="Local 2"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Product 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="#" title="Product 2" data-gallery="portfolio-gallery-product"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="#" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-media">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Media 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="#" title="Media 2" data-gallery="portfolio-gallery-branding"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="#" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-awards">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Awards 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="#" title="Branding 2" data-gallery="portfolio-gallery-book"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="#" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-local">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Local 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="#" title="App 3" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="#" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Product 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="#" title="Product 3" data-gallery="portfolio-gallery-product"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="#" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-media">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Media 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="#" title="Branding 2" data-gallery="portfolio-gallery-branding"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="#" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-awards">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Awards 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="#" title="Branding 3" data-gallery="portfolio-gallery-book"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="#" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Testimonials</h2>
                <p>What they are saying about us<br></p>
            </div><!-- End Section Title -->

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
                    },
                    "breakpoints": {
                    "320": {
                        "slidesPerView": 1,
                        "spaceBetween": 40
                    },
                    "1200": {
                        "slidesPerView": 3,
                        "spaceBetween": 1
                    }
                    }
                }
                </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="200">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>A108 Adam Street</p>
                                    <p>New York, NY 535022</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="300">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>+1 5589 55488 55</p>
                                    <p>+1 6678 254445 41</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@example.com</p>
                                    <p>contact@example.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="500">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Monday - Friday</p>
                                    <p>9:00AM - 05:00PM</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Your Name" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Your Email" required="">
                                </div>

                                <div class="col-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-12 text-center">
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

    </main>

    <footer id="footer" class="footer">

        <div class="col-lg-4 col-md-12">
            <h4>Follow Us</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links d-flex">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
        </div>

        </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

</body>

</html>
