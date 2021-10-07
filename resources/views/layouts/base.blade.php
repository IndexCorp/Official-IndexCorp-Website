<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IndexCorp Official Website</title>
  <meta content="IndexCorp Official Website" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/indexcorp.jpg" rel="icon">
  <link href="assets/img/indexcorp.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
      .section-bg{
        background-color: rgb(74, 189, 154, 0.1);
      }
  </style>

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar-->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        <h1><a href="index.html">Index<span>Corp</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a> --}}
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{$data['page'] == 'home'?'active':''}}" href="/">Home</a></li>
          {{-- <li><a class="nav-link scrollto {{$data['page'] == 'about'?'active':''}}" href="{{route('home.about')}}">About</a></li> --}}
          <li><a class="nav-link scrollto {{$data['page'] == 'services'?'active':''}}" href="{{route('home.services')}}">Services</a></li>
          <li><a class="nav-link scrollto {{$data['page'] == 'portfolio'?'active':''}}" href="{{route('home.portfolio')}}">Portfolio</a></li>
          <li><a class="nav-link scrollto {{$data['page'] == 'team'?'active':''}}" href="{{route('home.team')}}">Team</a></li>
          <li><a class="nav-link scrollto {{$data['page'] == 'contact'?'active':''}}" href="{{route('home.contact')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  {{$slot}}

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="section-bg">
            <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Testimonials</h2>
                <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                    <p>
                        <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                    <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                    <p>
                        <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                    <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                    <p>
                        <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                    <img src="assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                    <p>
                        <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                        <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                    <img src="assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                    <p>
                        <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                    <img src="assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    </div>
                </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action">
            <div class="container" data-aos="zoom-out">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                <h3 class="cta-title">Call To Action</h3>
                <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="#">Call To Action</a>
                </div>
            </div>
            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients">
            <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Clients</h2>
                <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
            </div>

            <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            </div>
        </section><!-- End Clients Section -->
    </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Reveal</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>